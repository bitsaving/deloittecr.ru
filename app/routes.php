<?php
Route::get('/green', array(
	'as'   => 'green',
	'uses' => 'App\Controllers\GreenController@index'
));
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
Route::get('/extramile/getTeam', [
	'as'   => 'extramileGetTeam',
	'uses' => 'App\Controllers\ExtraMileController@getTeam'
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
	Route::post('/pages/{page}/sections/{section}/change/{blockId}/image', 'BackendController@postImageData');
	Route::delete('/pages/{page}/sections/{section}/change/{blockId}/image', 'BackendController@deleteImage');

	Route::post('/pages/extramile/components/editTeam', [
		'as'   => 'postEditTeam',
		'uses' => 'BackendController@postEditTeam'
	]);
	Route::post('/pages/extramile/components/teams/paymentsForTeam', [
		'as'   => 'getPaymentsForTeam',
		'uses' => 'BackendController@getPaymentsForTeam'
	]);
	Route::post('/pages/extramile/components/newPayment', [
		'as'   => 'postSavePayment',
		'uses' => 'BackendController@postSavePayment'
	]);
	Route::post('/pages/extramile/components/changeActive', [
		'as'   => 'postChangeActive',
		'uses' => 'BackendController@postChangeActive'
	]);
	Route::get('/newPage', array(
		'as'   => 'newPage',
		'uses' => 'BackendController@newPage'
	));
	Route::get('/logout', array(
		'as'   => 'logout',
		'uses' => 'AuthController@logout'
	));

});

Route::get('/extramile/money', 'App\Controllers\YandexMoneyController@example');
Route::get('/extramile/donations', 'App\Controllers\YandexMoneyController@donations');

Route::get('/extramile/%20check-payment%20/test', 'App\Controllers\YandexMoneyController@checkPayment');
Route::post('/extramile/check-payment/test', 'App\Controllers\YandexMoneyController@checkPayment');

