<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Page;
use App\Models\Category;
use App\Models\Application;
use Illuminate\Support\Facades\Cache;
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
        view()->composer('partials.sidebar.main', function ($view) {
            $view->with('ctgrs', Category::get());
        });

        view()->composer('partials.sidebar.main', function ($view) {
            $view->with('pgs', Page::get());
        });

        view()->composer('partials.sidebar.main', function ($view) {
            $view->with('mns', Menu::get());
        });

        view()->composer(['layouts.*', 'partials.head.icon', 'partials.head.meta', 'partials.navbar.main.logo', 'partials.navbar.landing.main'], function ($view) {
            $view->with('aplct', Application::findOrFail(1));
        });
    }
}
