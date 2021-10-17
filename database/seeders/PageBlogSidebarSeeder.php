<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageBlogSidebarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_blog_sidebars')->insert([
            'search_placeholder' => 'Search',
            'search_btn_i_class' => 'fa-search',
            'categories_title' => 'CATEGORIES',
            'latest_posts_title' => 'Latest Posts',
            'tags_title' => 'Tags',
        ]);
    }
}
