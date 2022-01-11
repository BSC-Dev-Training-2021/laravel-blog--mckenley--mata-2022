<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
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
    {   // show the all the categories and post to selected pages
        \View::composer(['partials/widgets','blog/category', 'blog/post'], function ($view) {  
        $cat_types = DB::table('category_types')->get();
        $view->with(['cat_types'=>$cat_types]);
    });
    }
}
