<?php

Route::get('/extramile', array(
	'as'   => 'extramile',
	'uses' => 'App\Controllers\ExtraMileController@index'
));
Route::post('/extramile', [
	'as'   => 'extramilePost',
	'uses' => 'App\Controllers\ExtraMileController@postNewTeam'
]);
Route::get('/extramile/sortTeam', [
	'as'   => 'extramileSortTeam',
	'uses' => 'App\Controllers\ExtraMileController@sortTeam'
]);
Route::post('/backend/pages/extramile/components/editTeam', [
	'as'   => 'postEditTeam',
	'uses' => 'App\Controllers\BackendController@postEditTeam'
]);
Route::post('/backend/pages/extramile/components/changeActive', [
	'as'   => 'postChangeActive',
	'uses' => 'App\Controllers\BackendController@postChangeActive'
]);

Route::get('/', function () {
	return Redirect::action('extramile');
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
	Route::get('/newPage', array(
		'as'   => 'newPage',
		'uses' => 'BackendController@newPage'
	));
	Route::get('/pages/{page}', 'BackendController@page');
	Route::get('/pages/{page}/sections', 'BackendController@sections');
	Route::get('/pages/{page}/sections/{section}', 'BackendController@section');
	Route::get('/pages/{page}/sections/{section}/newBlock', 'BackendController@newBlock');
	Route::get('/pages/{page}/sections/{section}/change/{blockId}', 'BackendController@changeBlock');
	Route::post('/pages/{page}/sections/{section}/change/{blockId}', 'BackendController@postSaveBlock');
	Route::get('/pages/{page}/components/{component}', 'BackendController@component');


	Route::get('/newPage', array(
		'as'   => 'newPage',
		'uses' => 'BackendController@newPage'
	));
	Route::get('/logout', array(
		'as'   => 'logout',
		'uses' => 'AuthController@logout'
	));

});
