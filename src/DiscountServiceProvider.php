<?php

namespace Mbagri\Discount;

use Illuminate\Support\ServiceProvider;

class DiscountServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('discount');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/views'=>base_path('resources/views'),
            __DIR__.'/migrations'=>database_path('migrations')
        ]);
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

}
