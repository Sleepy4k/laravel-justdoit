<?php

namespace App\Providers;

use Illuminate\Support\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Resources\Json\JsonResource;

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
        // Carbon Locale
        Carbon::setLocale(config('app.locale'));

        // Json Wrap
        JsonResource::withoutWrapping();

        // Paginate
        Paginator::useBootstrap();
    }
}