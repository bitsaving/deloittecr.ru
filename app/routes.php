<?php

Route::get('/', array(
	'as'   => 'index',
	'uses' => 'App\Controllers\ExtraMileController@index'
));

