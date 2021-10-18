<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_galleries')->insert([
            'page_title_bg' => 'breadcrumb.jpg',
            'page_title_title' => 'GALLERY',
            'page_title_a_href' => '/',
            'page_title_a_text' => 'Home',
            'page_title_li' => 'Gallery',
            'gallery_filter1_data_filter' => '*',
            'gallery_filter1_text' => 'ALL',
            'gallery_filter2_data_filter' => '.filter-restaurant',
            'gallery_filter2_text' => 'RESTAURANT',
            'gallery_filter3_data_filter' => '.filter-swimmingpool',
            'gallery_filter3_text' => 'SWIMMING POOL',
            'gallery_filter4_data_filter' => '.filter-spa',
            'gallery_filter4_text' => 'SPA',
            'gallery_filter5_data_filter' => '.filter-roomview',
            'gallery_filter5_text' => 'ROOM VIEW',
        ]);
    }
}
