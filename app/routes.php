<?php

Route::get('/extramile', array(
	'as'   => 'index',
	'uses' => 'App\Controllers\ExtraMileController@index'
));
Route::get('/', function () {
	return 'Пока сайта нет';
});

