<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageRoomlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_roomlists')->insert([
            'page_title_bg' => 'breadcrumb.jpg',
            'page_title_title' => 'ROOMS',
            'page_title_a_href' => '/',
            'page_title_a_text' => 'Home',
            'page_title_li' => 'Rooms',
            'room_list_room_price_price' => '/ night',
            'room_list_room_price_a_text1' => 'view',
            'room_list_room_price_a_text2' => 'details',
            'sidebar_search_placeholder' => 'Search',
            'sidebar_search_i_class' => 'fa-search',
            'sidebar_widget1_title' => 'CATEGORIES',
            'sidebar_widget2_title' => 'Tags',
        ]);
    }
}
