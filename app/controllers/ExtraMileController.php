<?php namespace App\Controllers;

class ExtraMileController extends BaseController
{

	public $layout = 'extraMile';

	public function index()
	{
		return $this->make('index');
	}

} 