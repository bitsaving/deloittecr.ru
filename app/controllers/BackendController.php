<?php namespace App\Controllers;

use DownsideUp\Components\Validate;
use DownsideUp\Models\Block;
use DownsideUp\Models\Page;
use DownsideUp\Models\Section;
use DownsideUp\Models\Team;
use Input;
use Log;
use Redirect;
use URL;

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
	 * @return \Illuminate\View\View
	 */
	public function newBlock()
	{
		return $this->make('block');
	}

	public function changeBlock(
		$page, $section, $blockId)
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
		]);
	}

	public function postSaveBlock($page, $section, $blockId)
	{
		$data = Input::only('block', 'blockName', 'blockContent');
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
			$destinationPath = 'photo/teams/';
			$fileName = $file->getFilename() . '.' . $file->getClientOriginalExtension();
			$data['photo'] = '/' . $destinationPath . $fileName;
			$file->move($destinationPath, $fileName);
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
} 