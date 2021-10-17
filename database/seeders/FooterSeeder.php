<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            'w1_logo' => 'logo.svg',
            'w1_inner_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, velit placeat assumenda incidunt dolorem aliquam!',
            'w1_a_href' => 'https://www.tripadvisor.com/',
            'w1_a_span' => 'Recommended',
            'w1_a_img' => 'tripadvisor.png',
            'w2_h3' => 'LATEST NEWS',
            'w3_h3' => 'USEFUL LINKS',
            'w3_a1_href' => '/about',
            'w3_a1_text' => 'About Us',
            'w3_a2_href' => '/contact',
            'w3_a2_text' => 'Contact Us',
            'w3_a3_href' => '/shop',
            'w3_a3_text' => 'Shop',
            'w3_a4_href' => '/gallery',
            'w3_a4_text' => 'Himara Gallery',
            'w3_a5_href' => '/location',
            'w3_a5_text' => 'Our Location',
            'w4_h3' => 'Contact Info',
            'w4_li1_i_class' => 'fa-map-marker',
            'w4_li1_text' => 'Lorem ipsum dolor, 25, Himara',
            'w4_li2_i_class' => 'fa-phone',
            'w4_li2_text' => 'Phone: +1 888 123 4567',
            'w4_li3_i_class' => 'fa-fax',
            'w4_li3_text' => 'Fax: +1 888 123 4567',
            'w4_li4_i_class' => 'fa-globe',
            'w4_li4_text' => 'Web: www.hotelhimara.com',
            'w4_li5_i_class' => 'fa-envelope',
            'w4_li5_li_text' => 'mailto:info@site.com',
            'w4_li5_text' => 'contact@hotelhimara.com',
            'sf_copyright' => '& 2018 Hotel Himara. Designed by',
            'sf_copyright_href' => 'https://eagle-themes.com/',
            'sf_copyright_text' => 'Eagle-Themes',
            'sf_sm_facebook_href' => '#',
            'sf_sm_facebook_text' => 'facebook',
            'sf_sm_twitter_href' => '#',
            'sf_sm_twitter_text' => 'twitter',
            'sf_sm_googleplus_href' => '#',
            'sf_sm_googleplus_text' => 'googleplus',
            'sf_sm_pinterest_href' => '#',
            'sf_sm_pinterest_text' => 'pinterest',
            'sf_sm_linkedin_href' => '#',
            'sf_sm_linkedin_text' => 'linkedin',
            'sf_sm_youtube_href' => '#',
            'sf_sm_youtube_text' => 'youtube',
            'sf_sm_instagram_href' => '#',
            'sf_sm_instagram_text' => 'instagram',
        ]);
    }
}