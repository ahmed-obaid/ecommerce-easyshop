<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\models\category;
use App\models\type;

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
        view()->share('categories',category::get());
        view()->share('types',type::get());
         
    }
}
