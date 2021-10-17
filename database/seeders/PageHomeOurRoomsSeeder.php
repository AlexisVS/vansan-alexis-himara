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
        DB::table('page_home_our_rooms')->insert([
            'section_title_title' => 'OUR',
            'section_title_title_span' => 'ROOMS',
            'section_title_subtitle' => 'Our favorite rooms',
            'section_title_a_href' => '/room-list',
            'section_title_a_text' => 'View all rooms'
        ]);
    }
}
