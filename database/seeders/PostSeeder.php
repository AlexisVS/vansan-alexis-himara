<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'figure_link_img' => 'blog-post1.jpg',
                'title_text' => '10 Tips for Holiday Travel',
                'text' => 'An examination of how the current political and economical climate is affecting the mental healthcare industry...',
                'author_img' => 'admin.jpg',
                'author_text' => 'JANE',
                'date_i_class' => 'fa-clock-o',
                'date_text' => 'August 13, 2017',
                'comments_i_class' => 'fa-commenting-o',
                'comments_text' => '1 Comment',
                'post_category_id' => 5,
            ],
            [
                'figure_link_img' => 'blog-post2.jpg',
                'title_text' => 'Enjoy your holidays',
                'text' => 'An examination of how the current political and economical climate is affecting the mental healthcare industry...',
                'author_img' => 'admin.jpg',
                'author_text' => 'JANE',
                'date_i_class' => 'fa-clock-o',
                'date_text' => 'August 16, 2017',
                'comments_i_class' => 'fa-commenting-o',
                'comments_text' => '5 Comments',
                'post_category_id' => 5,
            ],
            [
                'figure_link_img' => 'blog-post3.jpg',
                'title_text' => 'Honeymoon at Hotel Himara',
                'text' => 'An examination of how the current political and economical climate is affecting the mental healthcare industry...',
                'author_img' => 'admin.jpg',
                'author_text' => 'JANE',
                'date_i_class' => 'fa-clock-o',
                'date_text' => 'January 11, 2018',
                'comments_i_class' => 'fa-commenting-o',
                'comments_text' => '3 Comments',
                'post_category_id' => 5,
            ],
        ]);
    }
}
