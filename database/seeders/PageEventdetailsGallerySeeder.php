<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageEventdetailsGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_eventdetails_galleries')->insert([
            [
                'figure_href' => 'event1.jpg',
                'figure_img' => 'event1.jpg',
            ],
            [
                'figure_href' => 'event2.jpg',
                'figure_img' => 'event2.jpg',
            ],
            [
                'figure_href' => 'event3.jpg',
                'figure_img' => 'event3.jpg',
            ],
            [
                'figure_href' => 'event4.jpg',
                'figure_img' => 'event4.jpg',
            ],
            [
                'figure_href' => 'event5.jpg',
                'figure_img' => 'event5.jpg',
            ],
            [
                'figure_href' => 'event6.jpg',
                'figure_img' => 'event6.jpg',
            ],
            [
                'figure_href' => 'event7.jpg',
                'figure_img' => 'event7.jpg',
            ],
            [
                'figure_href' => 'event8.jpg',
                'figure_img' => 'event8.jpg',
            ]
        ]);
    }
}
