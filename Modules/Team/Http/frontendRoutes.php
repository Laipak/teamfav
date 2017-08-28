<?php

Route::group(['domain' => '{subdomain}.{domain}.{tld}'], function()
{
    Route::get('/', 'FrontendTeamController@index');
});
