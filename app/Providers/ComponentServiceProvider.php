<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\View\Components\Footer\Copyright;
use App\View\Components\Navbar\Hamburger;
use App\View\Components\Preload\Animation;
use App\View\Components\Landing\Description;
use App\View\Components\Landing\Copyright as LandingCopyright;

class ComponentServiceProvider extends ServiceProvider
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
        // Component Single
        Blade::component('navbar-hamburger', Hamburger::class);
        Blade::component('preload-animation', Animation::class);
        Blade::component('footer-copyright', Copyright::class);
        Blade::component('landing-description', Description::class);
        Blade::component('landing-copyright', LandingCopyright::class);

        // Component Namespace
        Blade::componentNamespace('App\\View\\Components\\Body\\Navigation', 'navigation');
        Blade::componentNamespace('App\\View\\Components\\Body\\Card', 'card');
        Blade::componentNamespace('App\\View\\Components\\Body\\Chart', 'chart');
        Blade::componentNamespace('App\\View\\Components\\DataTables', 'datatable');
        Blade::componentNamespace('App\\View\\Components\\Body\\Profile', 'profile');
        Blade::componentNamespace('App\\View\\Components\\Errors', 'error');
        Blade::componentNamespace('App\\View\\Components\\Form', 'form');
        Blade::componentNamespace('App\\View\\Components\\Body\\Icon', 'icon');
        Blade::componentNamespace('App\\View\\Components\\Layout', 'layout');
        Blade::componentNamespace('App\\View\\Components\\Body\\Table', 'table');
    }
}