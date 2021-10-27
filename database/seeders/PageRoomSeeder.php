<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_rooms')->insert([
            'page_title_bg' => 'breadcrumb.jpg',
            'page_title_room_details_price' => '/ NIGHT',
            'page_titleli1_href' => '/',
            'page_titleli1_text' => 'Home',
            'page_titleli2_href' => '/',
            'page_titleli2_text' => 'Rooms',
            'section_title' => 'ROOM SERVICES',
            'reviews_title' => 'ROOM REVIEWS',
            'reviews_subtitle' => 'What our guests are saying about us',
            'reviews_5star' => '5 star',
            'reviews_4star' => '4 star',
            'reviews_3star' => '3 star',
            'reviews_2star' => '2 star',
            'reviews_1star' => '1 star',
            'service_list_i_class_accepted' => 'fa-check',
            'service_list_i_class_refused' => 'fa-times',
            'similar_rooms_title' => 'SIMILAR ROOMS',
            'similar_rooms_subtitle' => 'Leave your review',
        ]);
    }
}
