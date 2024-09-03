<?php

namespace App\Providers;

use App\Http\Controllers\SidebarController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layouts.sidebar', function($view) {
            $view->with('menus', SidebarController::getUserMenus());
        });
    }
}
