<?php

namespace NjDigitalLab\Laramin\Providers;

use Illuminate\Support\ServiceProvider;
use NjDigitalLab\Laramin\Commands\InstallCommand;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->commands([
            InstallCommand::class,
        ]);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../public/' => public_path('vendor/laraauth')
            ], 'laraauth-assets');
        }
    }
}
