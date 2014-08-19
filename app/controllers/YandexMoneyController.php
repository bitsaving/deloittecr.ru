<?php namespace App\Controllers;


use DownsideUp\YandexMoney\CommonHTTP3Example;
use Exception;

class YandexMoneyController extends BaseController
{
	public $layout = 'donations';

	public function example()
	{
		try {
			$instance = new CommonHTTP3Example();
			$instance->runExample();
		} catch (Exception $e) {
			echo "Exception thrown: " . $e;
		}
	}

	public function donations()
	{
		return $this->make('payment');
	}
}