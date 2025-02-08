<?php

namespace Taha\Ticket\Providers;

use Illuminate\Support\ServiceProvider;

class InspirationProvider   extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    // public function boot(): void
    // {
    //     $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    // }
    public function boot()
    {
        // Load migrations, routes, and views
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views/', 'ticketing');
    }
}
