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

		return $this->make('index', ['sections' => $sections]);
	}

	public function postNewTeam()
	{
		$data = Input::all();
		Log::info('Получены дынные:', $data);

		$validator = Validate::getTeamRegError($data);
		if ($validator) {
			return $validator;
		}
		$file = Input::file('file');
		$isFile = Input::hasFile('file');
		Log::info('Есть файл? - ', ['isFile' => $isFile]);
		$destinationPath = 'photo/teams/';
		$fileName = $file->getFilename() . '.' . $file->getClientOriginalExtension();
		$data['photo'] = $destinationPath . $fileName;
		$file->move($destinationPath, $fileName);
		Log::info('Файл перемещён в ', ['path' => $destinationPath]);
		$team = new Team();
		$team->saveData($data);

		return 'ok';
	}

}