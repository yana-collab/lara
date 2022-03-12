<?php

namespace App\Providers;

use Facade\FlareClient\View;
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
        $menu = [
            [
                'title' => 'Admin',
                'alias' => 'home'
            ],
            [
                'title' => 'News',
                'alias' => 'news::category'
            ]
        ];
       \View::share('menu', $menu);
    }
}
