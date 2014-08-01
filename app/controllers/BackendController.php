<?php namespace App\Controllers;

use DownsideUp\Models\Page;
use DownsideUp\Models\Section;
use Redirect;
use URL;

class BackendController extends BaseController
{

	public $layout = 'backend';

	/**Отдаёт страницу с навбаром со всеми меню (todo с созданием новой страницы)
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

	/**Отдаёт страницу со всеми секциями (todo добавлять новую секцию)
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

	public function section($page, $section)
	{
		$oPage = $this->getPage($page);
		$oSection = Section::whereSection($section)->first();

		return $this->make('section', ['oPage' => $oPage, 'oSection' => $oSection]);
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
} 