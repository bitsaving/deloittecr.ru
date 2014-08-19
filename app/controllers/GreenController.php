<?php namespace App\Controllers;

class GreenController extends BaseController
{

	public $layout = 'green';

	public function index()
	{
		return $this->make('index');
	}

}