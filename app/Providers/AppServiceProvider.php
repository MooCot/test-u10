<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Service\DeliveryFacade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(DeliveryFacade::class, function ($app) {
            return new DeliveryFacade();
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
