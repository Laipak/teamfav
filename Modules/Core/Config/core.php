<?php

return [

    /*
    |--------------------------------------------------------------------------
    | The prefix that'll be used for the administration
    |--------------------------------------------------------------------------
    */
    'admin-prefix' => 'admin',

    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    | You can customise the Middleware that should be loaded.
    | The web middleware is automatically loaded for both
    | Backend and Frontend routes.
    */
    'middleware' => [

       'backend' => [
            'auth.admin',
       ],

       'frontend' => [],

       'api' => [],
    ],

];
