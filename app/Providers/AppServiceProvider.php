<?php

namespace App\Providers;

use App\Models\Tariff;
use App\Models\UserRequisite;
use Illuminate\Support\Facades\Auth;
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

//        $user = Auth::user();
//
//        $userRequisite = UserRequisite::where('user_id', $user->id)->first();
//
//        $phone = preg_replace('/[^0-9+]/', '', $user->phone);
//        $phone = str_replace(['+', ' ', '-'], '+', $phone);
//        $phone = '+' . substr($phone, 1, 3) . ' ' . substr($phone, 4, 3) . ' ' . substr($phone, 7, 2) . ' ' . substr($phone, 9);
//
//        \view()->share('userRequisite', $userRequisite);
//        \view()->share('phone', $phone);
    }
}
