<?php

namespace AizPackages\CombinationGenerate\Providers;

use AizPackages\CombinationGenerate\Services\CombinationService;
use Illuminate\Support\ServiceProvider;

class CombinationServiceProvider extends ServiceProvider
{

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CombinationService::class, function ($app) {
            return new CombinationService();
        });
    }
}
