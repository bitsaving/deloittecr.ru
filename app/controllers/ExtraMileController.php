<?php namespace App\Controllers;

class ExtraMileController extends BaseController
{

	public $layout = 'main';

	public function index()
	{
		return $this->make('index');
	}

} 