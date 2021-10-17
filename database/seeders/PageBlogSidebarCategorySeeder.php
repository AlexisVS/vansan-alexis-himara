<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageBlogSidebarCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_blog_sidebar_categories')->insert([
            [
                "name" => 'Travel',
                'post_number' => '51'
            ],
            [
                "name" => 'Rooms',
                'post_number' => '24'
            ],
            [
                "name" => 'Holidays',
                'post_number' => '9'
            ],
            [
                "name" => 'Travel',
                'post_number' => '12'
            ],
            [
                "name" => 'Events',
                'post_number' => '28'
            ],
        ]);
    }
}
