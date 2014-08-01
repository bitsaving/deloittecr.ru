<?php namespace App\Controllers;

use DownsideUp\Components\Validate;
use DownsideUp\Models\Block;
use DownsideUp\Models\Page;
use DownsideUp\Models\Section;
use Input;
use Redirect;
use URL;

class BackendController extends BaseController
{

	public $layout = 'backend';

	/**
	 * Отдаёт страницу с навбаром со всеми меню (todo с созданием новой страницы)
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


	public function postSaveBlock($page, $section, $blockId)
	{
		$data = Input::only('block', 'blockName', 'blockContent');
		$oSection = $this->getSection($section);
		$sectionId = $oSection->id;
		$validator = Validate::getBlockError($data, $sectionId);
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
		return Page::wherePage($page)->first();
	}

	private function getSection($section)
	{
		return Section::whereSection($section)->first();
	}
} 