<?php

namespace Thurka\Viber;

use Illuminate\Support\ServiceProvider as Provider;

class ServiceProvider extends Provider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $source = __DIR__ . '/../config/viber.php';
        $this->publishes([$source => config_path('viber.php')]);
        $this->mergeConfigFrom($source, 'config');
        $this->loadMigrationsFrom(__DIR__.'/thurka/viber/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Thurka\Viber\ViberController');
        $this->app->make('Thurka\Viber\Viber');


    }
}
