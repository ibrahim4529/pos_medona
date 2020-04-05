<?php

namespace App\Providers;

use App\View\Components\DataTable;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Request;
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
        Blade::component('data-table', DataTable::class);
        Blade::if('url', function ($url){
            return Request::is($url);
        });
    }
}
