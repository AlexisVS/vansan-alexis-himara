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
            'section-title_h4' => 'HIMARA.',
            'section-title_span' => 'SERVICES',
            'section-title_text' => 'Check out our awesome services'
        ]);
    }
}
