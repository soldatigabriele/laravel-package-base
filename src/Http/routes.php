<?php

Route::group([
    'as' => 'laravel-quiz.',
    'prefix' => config('laravel-config.prefix'),
    'middleware' => ['active']
], function () {

    Route::post(config('laravel-config.routes.route-name'), [
        'as' => 'route-name',
        'uses' => 'Controller@index',
    ]);
});
