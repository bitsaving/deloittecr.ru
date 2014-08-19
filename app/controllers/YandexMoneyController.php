<?php namespace App\Controllers;


use DownsideUp\YandexMoney\CommonHTTP3Example;
use Exception;
use Input;
use Log;

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

	public function checkPayment()
	{
		$data = Input::all();
		Log::info('Пришёл запрос на разрешение платежа от YandexMoney:', $data);
		$datetime = date('c');
		$answer = '<?xml version="1.0" encoding="UTF-8"?>
			<checkOrderResponse performedDatetime ="' . $datetime . '"
			code="0" invoiceId="' . $data['invoiceId'] . '"
			shopId="18673"/>';

		return $answer;
	}

	public function checkPaymentTest()
	{
		$data = Input::all();
		Log::info('Пришёл запрос в тестовом режиме на разрешение платежа от YandexMoney:', $data);
		$datetime = date('c');
		$answer = '<?xml version="1.0" encoding="UTF-8"?>
			<checkOrderResponse performedDatetime ="' . $datetime . '"
			code="0" invoiceId="' . $data['invoiceId'] . '"
			shopId="18673"/>';

		return $answer;
	}

	public function payments()
	{
		$data = Input::all();
		Log::info('Уведомление о платеже от YandexMoney:', $data);

		$datetime = date('c');
		$answer = '<?xml version="1.0" encoding="UTF-8"?>
			<paymentAvisoResponse performedDatetime ="' . $datetime . '"
			code="0" invoiceId="' . $data['invoiceId'] . '"
			shopId="18673"/>';

		return $answer;
	}

	public function paymentsTest()
	{
		$data = Input::all();
		Log::info('Уведомление в тестовом режиме о платеже от YandexMoney:', $data);

		$datetime = date('c');
		$answer = '<?xml version="1.0" encoding="UTF-8"?>
			<paymentAvisoResponse performedDatetime ="' . $datetime . '"
			code="0" invoiceId="' . $data['invoiceId'] . '"
			shopId="18673"/>';

		return $answer;
	}


}