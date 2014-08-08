<?php namespace App\Controllers;

use DownsideUp\Components\Validate;
use DownsideUp\Models\Block;
use DownsideUp\Models\Image;
use DownsideUp\Models\Page;
use DownsideUp\Models\Payment;
use DownsideUp\Models\Section;
use DownsideUp\Models\Team;
use Input;
use Log;
use Redirect;
use URL;
use View;

class BackendController extends BaseController
{

	public $layout = 'backend';

	/**
	 * Отдаёт страницу с навбаром со всеми меню (todo с созданием новой страницы)
	 *
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
	 */
	public function pages()
	{
		$pages = Page::get()->all();
		if (count($pages) == 1) {
			return Redirect::to(URL::route('pages') . '/' . $pages[0]->page);
		}

		return $this->make('pages', ['pages' => $pages]);
	}

	/**
	 * Отдаёт страницу со всеми секциями (todo добавлять новую секцию)
	 *
	 * @param $page
	 *
	 * @return \Illuminate\View\View
	 */
	public function page($page)
	{
		$oPage = $this->getPage($page);

		return $this->make('page', ['oPage' => $oPage]);
	}

	/**
	 * Отдаёт страницу со всеми секциями (todo добавлять новую секцию)
	 *
	 * @param $page
	 *
	 * @return \Illuminate\View\View
	 */
	public function sections($page)
	{
		$oPage = $this->getPage($page);

		return $this->make('sections', ['oPage' => $oPage]);
	}

	/**
	 * Отдаёт страничку для создания нового блока
	 *
	 * @param $page
	 * @param $section
	 *
	 * @return \Illuminate\View\View
	 */
	public function section($page, $section)
	{
		$oPage = $this->getPage($page);
		$oSection = $this->getSection($section);

		return $this->make('section', ['oPage' => $oPage, 'oSection' => $oSection]);
	}

	/**
	 * Отдаёт аяксу страничку для создания нового блока
	 *
	 * @param $page
	 * @param $section
	 *
	 * @return \Illuminate\View\View
	 */
	public function newBlock($page, $section)
	{
		return $this->make('block', [
			'page'    => $page,
			'section' => $section,
			'blockId' => 'newBlock',
			'images'  => [],
		]);
	}

	public function changeBlock($page, $section, $blockId)
	{
		$oBlock = Block::find($blockId);
		if (!$oBlock) {
			return 'Нет такого блока';
		}

		return $this->make('block', [
			'block'        => $oBlock->block,
			'blockName'    => $oBlock->block_name,
			'blockContent' => $oBlock->content,
			'blockId'      => $oBlock->id,
			'images'       => $oBlock->images,
			'page'         => $page,
			'section'      => $section,
		]);
	}

	public function postSaveBlock($page, $section, $blockId)
	{

		$data = Input::all();
		Log::info('Данные для блока:', $data);
		$oSection = $this->getSection($section);
		$sectionId = $oSection->id;
		$validator = Validate::getBlockError($data, $sectionId, (int)$blockId);

		if ($validator) {
			return $validator;
		}
		if ($blockId == 'newBlock') {
			$oBlock = new Block();
		} else {
			$oBlock = Block::find($blockId);
		}

		$oBlock->saveBlock($data, $sectionId);
		if (Input::hasFile('image')) {
			$file = Input::file('image');
			$fileName = $file->getFilename() . '.' . $file->getClientOriginalExtension();
			$destinationPath = 'images/' . $section . '/';
			$data['image'] = '/' . $destinationPath . $fileName;
			$file->move($destinationPath, $fileName);
			$data['blockId'] = $oBlock->id;
			Log::info('Данные для сохранения файла', $data);

			$image = new Image();
			$image->saveImage($data);

		}
		$message = 'Сохранено';

		return $message;
	}

	/**Получить модель Page
	 *
	 * @param $page
	 *
	 * @return Page
	 */
	private function getPage($page)
	{
		return Page::wherePage($page)->with('sections')->first();
	}

	private function getSection($section)
	{
		return Section::whereSection($section)->first();
	}

	/**
	 * Вызов функции по компоненту
	 *
	 * @param $page
	 * @param $component
	 *
	 * @return mixed
	 */
	public function component($page, $component)
	{
		return $this->$component($page, $component);
	}

	public function teams($page, $component)
	{
		$teams = Page::wherePage($page)
			->first()
			->components()
			->whereComponent($component)
			->first()
			->teams()
			->orderBy('id', 'desc')
			->paginate(12);

		return $this->make('teams', ['teams' => $teams]);
	}

	public function postEditTeam()
	{
		$data = Input::all();
		Log::info('Получены дынные для правки команды:', $data);

		$validator = Validate::getTeamEditError($data, $data['id']);
		if ($validator) {
			Log::info('Ошибки в данных:', $validator);

			return $validator;
		}
		$data['photo'] = null;
		if (Input::hasFile('file')) {
			$file = Input::file('file');
			$destinationPath = 'teams/photo/';
			$fileName = $file->getFilename() . '.' . $file->getClientOriginalExtension();
			$data['photo'] = '/' . $destinationPath . $fileName;
			$file->move($destinationPath, $fileName);
			Log::info("Файл $fileName перемещён в ", ['path' => $destinationPath]);
		}
		if (Input::hasFile('logo')) {
			$logo = Input::file('logo');
			$destinationPath = 'teams/logo/';
			$fileName = $logo->getFilename() . '.' . $logo->getClientOriginalExtension();
			$data['logo'] = '/' . $destinationPath . $fileName;
			$logo->move($destinationPath, $fileName);
			Log::info("Файл $fileName перемещён в ", ['path' => $destinationPath]);
		}
		$data['component_id'] = Page::wherePage('extramile')
			->first()
			->components()
			->whereComponent('teams')
			->first()
			->id;
		$team = Team::find($data['id']);
		$team->editTeam($data);

		return ['success' => 'Данные изменены'];
	}

	public function postChangeActive()
	{
		$data = Input::all();
		Log::info('Данные для модерации команды:', $data);
		$team = Team::find($data['id']);
		Log::info('Найдена команда:', array('team' => $team->id));
		if (!$team) {
			return ['error' => 'Какая-то ошибка, попробуйте ещё раз'];
		}
		$val = $data['val'] === 'true' ? true : false;
		$team->active = $val;
		$team->save();

		return ['success' => 'Изменено'];
	}

	public function postImageData()
	{
		$data = Input::all();
		$image = Image::find($data['image_id']);
		if (!$image) {
			return ['error' => 'Неизвестная ошибка, перезагрузите страницу.'];
		}
		$image->content = $data['val'];
		$image->save();

		return 'Сохранено';
	}

	public function deleteImage()
	{
		$data = Input::all();
		$image = Image::find($data['image_id']);
		if (!$image) {
			return 'Неизвестная ошибка, изображение не удалено, перезагрузите страницу.';
		}
		$image->delete();

		return 'Удалено';
	}

	public function payments($page, $component)
	{
		$payments = Page::wherePage($page)
			->first()
			->components()
			->whereComponent($component)
			->first()
			->payments()
			->orderBy('id')
			->paginate(20);

		return $this->make('payments', ['payments' => $payments]);
	}


	public function getPaymentsForTeam()
	{
		$team = Input::get('teamId');
		$payments = Payment::whereTeamId($team)->get()->all();

		if (count($payments) == 0) {
			return ['error' => 'Для этой команды нет платежей'];
		}

		return View::make('backend.paymentsForTeam', ['payments' => $payments]);
	}

	public function postSavePayment()
	{
		$data = Input::all();
		Log::info('Получены данные для нового платежа', $data);
		$validator = Validate::getPaymentError($data);
		if ($validator) {
			Log::info('Ошибки в данных для платежа:', $validator);

			return $validator;
		}
		$payment = new Payment();
		$payment->savePayment($data);
		if ($data['teamId'] != 0) {
			$this->saveAmountToTeam($data['teamId']);
		}

		return 'Сохранено';
	}

	private function saveAmountToTeam($teamId)
	{
		$team = Team::find($teamId);
		$teamPayments = $team->payments;
		$amount = 0;
		foreach ($teamPayments as $onePayment) {
			$amount += $onePayment->amount;
		}
		$team->amount = $amount;
		$team->save();
	}
} 