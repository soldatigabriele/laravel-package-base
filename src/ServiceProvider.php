<?php

namespace SoldatiGabriele\PackageName;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{

    /**
     * Perform post-registration booting of services.
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-config.php', 'laravel-config');
        $this->bootMiddleware();
        $this->app['router']->group(['namespace' => 'SoldatiGabriele\PackageName\Http\Controllers'], function () {
            require __DIR__ . '/Http/routes.php';
        });
    }

    protected function bootMiddleware()
    {
        $this->app['router']->aliasMiddleware('active', Http\Middleware\Active::class);
    }
}
