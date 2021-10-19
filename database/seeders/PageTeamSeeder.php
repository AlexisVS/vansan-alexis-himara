<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_teams')->insert([
            'page_title_bg' => 'breadcrumb.jpg',
            'page_title_title' => 'OUR STAFF',
            'page_title_a_href' => '/',
            'page_title_a_text' => 'Home',
            'page_title_li' => 'Our Staff',
        ]);
    }
}
