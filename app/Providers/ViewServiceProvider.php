<?php

namespace App\Providers;

use App\Models;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // view()->composer('partials.sidebar.main', function ($view) {
        //     $view->with('ctgrs', Models\Category::get());
        // });

        // view()->composer('partials.sidebar.main', function ($view) {
        //     $view->with('pgs', Models\Page::get());
        // });

        // view()->composer('partials.sidebar.main', function ($view) {
        //     $view->with('mns', Models\Menu::get());
        // });

        // view()->composer(['layouts.*', 'partials.head.icon', 'partials.head.meta', 'partials.navbar.main.logo', 'partials.navbar.landing.main'], function ($view) {
        //     $$view->with('aplct', Models\Application::findOrFail(1));
        // });
    }
}