<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Menu;

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
        
        view()->composer('*', function($view){
            $menus = Menu::all();
            // dd($menus);
            return $view->with('menus', $menus);
        });
    }
}
