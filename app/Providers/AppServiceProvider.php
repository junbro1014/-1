<?php

namespace App\Providers;

use App\Services\MessageInstance;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public string $data;
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('message-facade', function ($app) {
            return new MessageInstance();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
