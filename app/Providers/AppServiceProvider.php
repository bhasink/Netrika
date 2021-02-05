<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Service;
use App\ServiceCategory;
use View;

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

        $get_service_cat = ServiceCategory::all()->sortBy('name');
        $get_service = Service::all()->sortBy('name');
        $data = array(
            'get_service_cat' => $get_service_cat,
            'get_service' => $get_service,
        );

        View::share('menudata', $data);


    }
}
