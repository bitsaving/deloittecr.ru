<?php namespace App\Controllers;

use DownsideUp\Components\Validate;
use DownsideUp\Models\Page;
use DownsideUp\Models\Team;
use DownsideUp\Widget\ExtraMileWidget;
use Input;
use Log;
use View;

class ExtraMileController extends BaseController
{

	public $layout = 'extraMile';

	public function index()
	{
		$sections = Page::wherePage('extramile')->first()->sections()->orderBy('id')->get();
		$teams = ExtraMileWidget::sortTeam('amount');

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
		$destinationPath = 'teams/photo/';
		$fileName = $file->getFilename() . '.' . $file->getClientOriginalExtension();
		$data['photo'] = '/' . $destinationPath . $fileName;
		$file->move($destinationPath, $fileName);
		Log::info("Файл $fileName перемещён в ", ['path' => $destinationPath]);
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
		$team = new Team();
		$team->saveNewTeam($data);

		return ['success' => 'Регистрация прошла успешно. После модерации Ваша команда появится в списке на сайте.'];
	}

	public function sortTeam()
	{
		$sort = Input::get('sort');

		return ExtraMileWidget::getTeamsForCarousel($sort);
	}

	public function getTeam()
	{
		$teamId = Input::get('teamId');
		$team = Team::find($teamId);

		return View::make('extramile.team_card.team_info', ['team' => $team]);
	}
}