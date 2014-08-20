<?php namespace App\Controllers;


use DownsideUp\Models\Payment;
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
		$paymentData = [];
		$paymentData['teamId'] = $data['teamId'];
		$paymentData['payer'] = $data['customerNumber'];
		$paymentData['payment'] = $this->setPaymentType($data['paymentType']);
		$paymentData['amount'] = $data['orderSumAmount'];
		Log::info('Попытка записать платёж с данными:', $paymentData);

		$payment = new Payment();
		$payment->savePayment($paymentData);

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
		$paymentData = [];
		$paymentData['teamId'] = $data['teamId'];
		$paymentData['payer'] = $data['customerNumber'];
		$paymentData['payment'] = $this->setPaymentType($data['paymentType']);
		$paymentData['amount'] = $data['orderSumAmount'];
		Log::info('Попытка записать тестовый платёж с данными:', $paymentData);
		$payment = new Payment();
		$payment->savePayment($paymentData);

		$datetime = date('c');
		$answer = '<?xml version="1.0" encoding="UTF-8"?>
			<paymentAvisoResponse performedDatetime ="' . $datetime . '"
			code="0" invoiceId="' . $data['invoiceId'] . '"
			shopId="18673"/>';

		return $answer;
	}


	private function setPaymentType($YMPaymentType)
	{
		switch ($YMPaymentType) {
			case 'PC':
				$paymentType = 'Яндекс.Деньги';
				break;
			case 'AC':
				$paymentType = 'Банковская карта';
				break;
			case 'WM':
				$paymentType = 'WebMoney';
				break;
			case 'GP':
				$paymentType = 'Терминал';
				break;
			default:
				$paymentType = '';
		};

		return $paymentType;
	}
}