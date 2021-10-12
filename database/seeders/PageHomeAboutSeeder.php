<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageHomeAboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_home_abouts')->insert([
            'section-title_title' => 'Hotel Himara. ',
            'section-title_section_subtitle' => 'High quality accommodation services',
            // mettre text
            'info-branding_p' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic
            voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi
            tempora ducimus enim dicta laborum esse aliquam rem
            assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi
            facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores
            veritatis minus quam atque non autem quasi
            consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda.',
            'providers_text' => 'Recommended on:',
            'content_img' => 'logo-big-transparent.svg',
            'content_star' => 'fa-star',
            'content_title' => 'LUXURY HOTEL',
            'content_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolorem iste suscipit voluptates architecto nemo.',
        ]);
    }
}
