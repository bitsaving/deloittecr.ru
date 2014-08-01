<?php namespace App\Controllers;

use Auth;
use Input;
use Redirect;

class AuthController extends BaseController
{
	public $layout = 'auth';

	public function login()
	{
		return $this->make('login');
	}

	public function signIn()
	{
		$data = Input::all();
		$remember = isset($data['remember']) ? true : false;

		if (!Auth::attempt(array('username' => $data['name'], 'password' => $data['password']), $remember)) {
			$errors = 'Нет такого пользователя';

			return Redirect::route('login')->with('errors', $errors)->withInput();
		}

		return Redirect::route('pages');
	}

	public function logout()
	{
		Auth::logout();

		return Redirect::route('login');
	}


}