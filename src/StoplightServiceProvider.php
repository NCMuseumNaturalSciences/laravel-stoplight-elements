<?php

declare(strict_types=1);

namespace NCMuseumNaturalSciences\Laravel\LaravelStoplight;

use Illuminate\Support\ServiceProvider;

class StoplightServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            // Publish Config
            $this->publishes([
                __DIR__ . '/../config/ncmns-stoplight.php' => config_path('ncmns-stoplight.php'),
            ], 'config');

            // Publish Views
            $this->publishes([
                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/ncmns/stoplight'),
            ], 'views');
        }

        $this->loadRoutesFrom(
            __DIR__ . '/../routes/stoplight.php'
        );

        $this->loadViewsFrom(
            __DIR__ . '/../resources/views',
            'stoplight',
        );
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/ncmns-stoplight.php',
            'stoplight',
        );
    }
}
