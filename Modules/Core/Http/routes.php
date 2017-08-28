<?php

Route::group(['domain' => env('APP_DOMAIN'), 'namespace' => 'Modules\Core\Http\Controllers'], function()
{

    // Public homepage
    Route::get('/', 'CoreController@index')->name('home');

});
