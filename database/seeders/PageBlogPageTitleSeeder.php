<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageBlogPageTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_blog_page_titles')->insert([
            'title' => 'Blog',
            'a_href' => '/',
            'a_text' => 'Home',
            'li' => 'Blog',
            'img' => 'breadcrumb.jpg'
        ]);
    }
}
