<?php namespace App\Controllers;

use DownsideUp\Components\Validate;
use DownsideUp\Models\Page;
use DownsideUp\Models\Team;
use Input;
use Log;

class ExtraMileController extends BaseController
{

	public $layout = 'extraMile';

	public function index()
	{
		$sections = Page::wherePage('extramile')->first()->sections()->orderBy('id')->get();
		$teams = $this->sortTeam('amount');

		return $this->make('index', ['sections' => $sections, 'teams' => $teams]);
	}

	public function postNewTeam()
	{
		$data = Input::all();
		Log::info('Получены дынные на новую команду:', $data);

		$validator = Validate::getTeamRegError($data);
		if ($validator) {
			Log::info('Ошибки в данных:', $validator);

			return $validator;
		}
		$file = Input::file('file');
		$destinationPath = 'photo/teams/';
		$fileName = $file->getFilename() . '.' . $file->getClientOriginalExtension();
		$data['photo'] = '/' . $destinationPath . $fileName;
		$file->move($destinationPath, $fileName);
		Log::info("Файл $fileName перемещён в ", ['path' => $destinationPath]);
		$data['component_id'] = Page::wherePage('extramile')
			->first()
			->components()
			->whereComponent('teams')
			->first()
			->id;
		$team = new Team();
		$team->saveNewTeam($data);

		return ['success' => 'Регистрация прошла успешно. После модерации Ваша команда появится в списке на сайте.'];
	}

	public function sortTeam($arg)
	{
		$teams = Page::wherePage('extramile')
			->first()
			->components()
			->whereComponent('teams')
			->first()
			->teams()
			->orderBy($arg)
			->get()
			->all();

		return $teams;
	}

}