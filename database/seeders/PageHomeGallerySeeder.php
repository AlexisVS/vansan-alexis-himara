<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageHomeGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_home_galleries')->insert([
            'section_title_h4' => 'HIMARA. ',
            'section_title_span' => 'GALLERY',
            'section_title_subtitle' => 'Check out our image gallery',
            'section_title_a_href' => '/gallery',
            'section_title_a_text' => 'View gallery images',
        ]);
    }
}