<?php

namespace App\Providers;

use App\Models\ImageBrand;
use App\Models\Layout_Footer;
use App\Models\Layout_Header;
use App\Models\Layout_top_menu;
use App\Models\Post;
use App\Models\Room;
use Illuminate\Pagination\Paginator;
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

        Paginator::defaultView('front.partials.layout.pagination');
        View::share([
            // mettre toutes les variables
            // global des layout ici
            'footer' => Layout_Footer::find(1),
            'header' => Layout_Header::find(1),
            'topMenu' => Layout_top_menu::find(1),
            'posts' => Post::all(),
            'rooms' => Room::all(),
            'image_brand' => ImageBrand::first(),
        ]);
    }
}
