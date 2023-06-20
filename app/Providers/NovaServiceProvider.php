<?php

namespace App\Providers;

use App\Nova\Dashboards\Main;
use App\Nova\Permission;
use App\Nova\Tariff;
use App\Nova\TariffAnnotation;
use App\Nova\User;
use App\Nova\Role;
use App\Nova\UserTariff;
use Illuminate\Support\Facades\Gate;

use Illuminate\Support\Facades\Route;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

//        $this->getCustomMenu();

        Nova::mainMenu(function ($request) {
            return [
                MenuSection::dashboard(Main::class)->icon('chart-bar'),

                MenuSection::make('Praca z użytkownikami', [
                    MenuItem::resource(User::class),
                    MenuItem::resource(Role::class),
                    MenuItem::resource(UserTariff::class),
                ])->icon('user-group')->collapsable(),

                MenuSection::make('Produkty', [
                    MenuItem::resource(Tariff::class),
                ])->icon('briefcase')->collapsable(),

                MenuSection::make('Ustawienia produktu', [
                    MenuItem::resource(TariffAnnotation::class),
                ])->icon('clipboard')->collapsable(),
//
//                MenuSection::make('Программы', [
//                    MenuItem::resource(Program::class),
//                    MenuItem::resource(Level::class),
//                    MenuItem::resource(Bonus::class),
//                ])->icon('briefcase')->collapsable(),
//
//                MenuSection::make('Платежи', [
//                    MenuItem::resource(\App\Nova\OutputPayment::class),
//                    MenuItem::resource(\App\Nova\Wallets::class),
//                ])->icon('cash')->collapsable(),

            ];
        });
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->role_id, [
                1,
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
//            new Role,
//            new Permission,
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

//    private function getCustomMenu()
//    {
//        Nova::mainMenu(function(\GuzzleHttp\Psr7\Request $request){
//            return [
//                MenuSection::dashboard(Main::class),
//            ];
//        });
//    }
}
