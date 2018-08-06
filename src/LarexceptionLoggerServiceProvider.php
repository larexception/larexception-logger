<?php

namespace Larexception\LarexceptionLogger;

use Illuminate\Support\ServiceProvider;

class LarexceptionLoggerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('larexception.php'),
            ], 'config');

            /*
            $this->loadViewsFrom(__DIR__.'/../resources/views', 'larexception');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/larexception'),
            ], 'views');
            */
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'larexception');
    }
}
