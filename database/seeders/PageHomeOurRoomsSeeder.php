<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageHomeOurRoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_home_our-rooms')->insert([
            'section-title_title' => 'OUR',
            'section-title_title_span' => 'ROOMS',
            'section-title_subtitle' => 'Our favorite rooms',
            'section-title_a_href' => '/room-list',
            'section-title_a_text' => 'View all rooms'
        ]);
    }
}
