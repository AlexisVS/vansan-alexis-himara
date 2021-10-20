<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageHomeServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_home_services')->insert([
            'section_title_h4' => 'HIMARA. ',
            'section_title_span' => 'SERVICES',
            'section_title_text' => 'Check out our awesome services'
        ]);
    }
}
