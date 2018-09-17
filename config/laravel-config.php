<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Options
    |--------------------------------------------------------------------------
    |
    | Options description
    |
    */
    'active' => env('VARIABLE_NAME', true),

     /*
    |--------------------------------------------------------------------------
    | User Model
    |--------------------------------------------------------------------------
    |
    | In order to create the correct relations we
    | need to specify the users model name
    |
    */

    'user_model' =>  '\SoldatiGabriele\PackageName\Tests\User',

    /*
    |--------------------------------------------------------------------------
    | Routes
    |--------------------------------------------------------------------------
    |
    | Configurable routes url
    |
    | routeName => routeUrl
    |
    */

    'routes' => [
        'route-name'            => '/name',
    ],
];
