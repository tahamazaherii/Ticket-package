<?php

namespace Taha\Ticket;

use Illuminate\Support\ServiceProvider;

class TicketServiceProvider extends ServiceProvider
{
    public function register()
    {
        // ثبت bindings و سرویس‌ها در اینجا
    }

    public function boot()
    {
       
 

        $this->publishes([
            __DIR__ . '/../src/Http/Controllers/V1' => app_path('Http/Controllers/V1'),
            __DIR__ . '/../routes' => base_path('routes'),
            __DIR__ . '/../src/Models' => app_path('Models'),
            __DIR__ . '/../src/Repositories' => app_path('Repositories'),
            __DIR__ . '/../resources/views' => app_path('views'),
            __DIR__ . '/../database/migrations' => base_path('database/migrations'),
            __DIR__ . '/../database/seeders' => base_path('database/seeders'),
            __DIR__ . '/../public' => base_path('public'),
        ], 'Ticket');  

        
        
        // $this->loadRoutesFrom(__DIR__.'/../routes/web.php');


    }
}