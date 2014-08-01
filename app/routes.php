<?php

Route::get('/extramile', array(
	'as' => 'extramile',
	'uses' => 'App\Controllers\ExtraMileController@index'
));
Route::get('/', function () {
	return 'Сайт в разработке';
});

Route::get('/login', array(
	'before' => 'guest',
	'as'     => 'login',
	'uses'   => 'App\Controllers\AuthController@login'
));
Route::post('/signIn', array(
	'as'   => 'signIn',
	'uses' => 'App\Controllers\AuthController@signIn'
));

Route::group(array(
	'before'    => 'auth',
	'prefix'    => 'backend',
	'namespace' => 'App\Controllers',
), function () {
	Route::get('/', function () {
		return Redirect::to('backend/pages');
	});
	Route::get('/pages', array(
		'as'   => 'pages',
		'uses' => 'BackendController@pages'
	));
	Route::get('/pages/{page}', 'BackendController@page');
	Route::get('/pages/{page}/{section}', 'BackendController@section');

	Route::get('/logout', array(
		'as'   => 'logout',
		'uses' => 'AuthController@logout'
	));
	Route::get('/newPage', array(
		'as'   => 'newPage',
		'uses' => 'BackendController@newPage'
	));
});
