<?php namespace App\Controllers;

use DownsideUp\Models\Page;

class ExtraMileController extends BaseController
{

	public $layout = 'extraMile';

	public function index()
	{
		$sections = Page::wherePage('extramile')->first()->sections()->orderBy('id')->get();

		return $this->make('index', ['sections' => $sections]);
	}

}