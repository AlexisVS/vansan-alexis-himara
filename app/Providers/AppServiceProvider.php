<?php

namespace App\Providers;

use App\Models\Footer;
use App\Models\Header;
use App\Models\Top_menu;
use Illuminate\Support\Facades\View;
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
        View::share([
            // mettre toutes les variables
            // global des layout ici
            'footer' => Footer::find(1),
            'header' => Header::find(1),
            'topMenu' => Top_menu::find(1),
        ]);
    }
}
