<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageHomeTestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_home_testimonials')->insert([
            'section_title_h4' => 'OUR GUESTS LOVE US',
            'section_title_span' => '',
            'section_title_h4_after' => '',
            'section_title_p' => 'What our guests are saying about us',
        ]);
    }
}
