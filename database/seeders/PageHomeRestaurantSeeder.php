<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageHomeRestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_home_restaurants')->insert([
            'section_title_data_src_img' => 'restaurant.jpg',
            'section_title_h4' => 'HIMARA. RESTAURANT',
            'section_title_p' => 'Live a gourmet dining experience',
        ]);
    }
}
