<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\Facades\Schema;
//use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

//        View::composer('admin.all' , function ($view){
//            $users = User::latest()->get();
//            $view->with('users' , $users);
//        });
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
}
