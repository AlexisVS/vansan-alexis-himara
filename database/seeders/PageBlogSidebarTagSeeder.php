<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageBlogSidebarTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_blog_sidebar_tags')->insert([
            [
                'name' => 'Party'
            ],
            [
                'name' => 'Travel'
            ],
            [
                'name' => 'Wedding'
            ],
            [
                'name' => 'Food'
            ],
            [
                'name' => 'Music'
            ],
            [
                'name' => 'City'
            ],
            [
                'name' => 'Image'
            ],
            [
                'name' => 'Hotel'
            ],
        ]);
    }
}
