<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;  // ← Added this line
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Force all generated URLs (asset(), route(), url()) to use HTTPS in production
        if (env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }

        // Optional: Force HTTPS always (even locally) — uncomment the line below if you prefer
        // URL::forceScheme('https');
    }
}