<?php

Route::group(['middleware' => ['web', 'subdomain'], 'namespace' => 'Modules\Core\Http\Controllers'], function()
{

	// Public homepage
	Route::get('/', 'CoreController@index')->name('home');


	// Route::group()
});
