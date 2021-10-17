<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageBlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_home_blog_posts')->insert([
            [
                'figure_img' => 'blog-post1.jpg',
                'post_title_text' => '10 Tips for Holiday Travel',
                'post_meta_img' => 'admin.jpg',
                'post_meta_text' => 'JANE Doe',
                'date_i_class' => 'fa-clock-o',
                'date_text' => 'August 13, 2017',
                'comments_i_class' => 'fa-commenting-o',
                'comments_text' => '1 Comment',
                'category_i_class' => 'fa-folder-open-o',
                'category_text' => 'IN',
                'category_a1_text' => 'News',
                'category_a2_text' => 'Events',
                'post_details_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque, officiis dicta! Sit numquam qui tenetur tempore officia minus, a dignissimos ...',
            ],
            [
                'figure_img' => 'blog-post2.jpg',
                'post_title_text' => 'Are you ready to enjoy your holidays',
                'post_meta_img' => 'admin.jpg',
                'post_meta_text' => 'JANE Doe',
                'date_i_class' => 'fa-clock-o',
                'date_text' => 'August 16, 2017',
                'comments_i_class' => 'fa-commenting-o',
                'comments_text' => '5 Comments',
                'category_i_class' => 'fa-folder-open-o',
                'category_text' => 'IN',
                'category_a1_text' => 'News',
                'category_a2_text' => 'Events',
                'post_details_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam impedit nihil est modi amet, sapiente sed hic quaerat suscipit sunt labore, ea quas ut cumque, cum nam accusantium molestiae ipsum ...',
            ],
            [
                'figure_img' => 'blog-post3.jpg',
                'post_title_text' => 'Honeymoon in Hotel Himara',
                'post_meta_img' => 'admin.jpgTravel Gift Ideas for Every Type of Traveler',
                'post_meta_text' => 'JANE Doe',
                'date_i_class' => 'fa-clock-o',
                'date_text' => 'January 03, 2018',
                'comments_i_class' => 'fa-commenting-o',
                'comments_text' => '3 Comments',
                'category_i_class' => 'fa-folder-open-o',
                'category_text' => 'IN',
                'category_a1_text' => 'News',
                'category_a2_text' => 'Events',
                'post_details_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci assumenda eius amet obcaecati hic soluta nisi fugiat minima, molestias nam consequatur rem cupiditate, consequuntur laborum harum enim, ratione vitae doloribus ...',
            ],
            [
                'figure_img' => 'blog-post4.jpg',
                'post_title_text' => 'Travel Gift Ideas for Every Type of Traveler',
                'post_meta_img' => 'admin.jpg',
                'post_meta_text' => 'JANE Doe',
                'date_i_class' => 'fa-clock-o',
                'date_text' => 'February 03, 2018',
                'comments_i_class' => 'fa-commenting-o',
                'comments_text' => '2 Comments',
                'category_i_class' => 'fa-folder-open-o',
                'category_text' => 'IN',
                'category_a1_text' => 'News',
                'category_a2_text' => 'Events',
                'post_details_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque, officiis dicta! Sit numquam qui tenetur tempore officia minus, a dignissimos ...',
            ],
            [
                'figure_img' => 'blog-post5.jpg',
                'post_title_text' => 'Breakfast with coffee and orange juice',
                'post_meta_img' => 'admin.jpg',
                'post_meta_text' => 'JANE Doe',
                'date_i_class' => 'fa-clock-o',
                'date_text' => 'February 23, 2018',
                'comments_i_class' => 'fa-commenting-o',
                'comments_text' => '7 Comments',
                'category_i_class' => 'fa-folder-open-o',
                'category_text' => 'IN',
                'category_a1_text' => 'News',
                'category_a2_text' => 'Events',
                'post_details_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque, officiis dicta! Sit numquam qui tenetur tempore officia minus, a dignissimos ...',
            ],
            [
                'figure_img' => 'blog-post6.jpg',
                'post_title_text' => 'Running On Sand',
                'post_meta_img' => 'admin.jpg',
                'post_meta_text' => 'JANE Doe',
                'date_i_class' => 'fa-clock-o',
                'date_text' => 'March 04, 2018',
                'comments_i_class' => 'fa-commenting-o',
                'comments_text' => '0 Comments',
                'category_i_class' => 'fa-folder-open-o',
                'category_text' => 'IN',
                'category_a1_text' => 'News',
                'category_a2_text' => 'Events',
                'post_details_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque, officiis dicta! Sit numquam qui tenetur tempore officia minus, a dignissimos ...',
            ],
        ]);
    }
}