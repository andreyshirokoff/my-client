<?php

namespace App\Providers;

use App\Models\Tariff;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
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
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        $tariffs = new Tariff();
        \view()->share('tariffs', $tariffs);

        Paginator::useBootstrap();
    }
}
