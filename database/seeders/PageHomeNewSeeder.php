<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageHomeNewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_home_news')->insert([
            'section_title_h4' => 'LATEST NEWS',
            'section_title_p' => 'Check out our latest news'
        ]);
    }
}
