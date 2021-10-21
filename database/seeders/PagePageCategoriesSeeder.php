<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagePageCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_page_categories')->insert([
            [
                'text' => 'Travel',
                'post_number' => '51'
            ],
            [
                'text' => 'Rooms',
                'post_number' => '24'
            ],
            [
                'text' => 'Holidays',
                'post_number' => '9'
            ],
            [
                'text' => 'Travel',
                'post_number' => '12'
            ],
            [
                'text' => 'Events',
                'post_number' => '28'
            ],
        ]);
    }
}
