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
            'section_title' => 'ROOM SERVICES',
            'reviews_title' => 'ROOM REVIEWS',
            'reviews_subtitle' => 'What our guests are saying about us',
            'service_list_i_class_accepted' => 'fa-check',
            'service_list_i_class_refused' => 'fa-times',
            'similar_rooms_title' => 'SIMILAR ROOMS',
            'similar_rooms_subtitle' => 'Leave your review',
        ]);
    }
}
