<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_contacts')->insert([
            'page_title_bg' => 'breadcrumb.jpg',
            'page_title_title' => 'CONTACT',
            'page_title_a_href' => '/',
            'page_title_a_text' => 'Home',
            'page_title_li' => 'Contact',
            'section_title_title' => 'CONTACT US',
            'section_title_subtitle' => 'Let’s Talk',
            'section_title_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus sit, fugiat at in assumenda corrupti autem iste eveniet eaque vitae beatae tenetur, voluptatem eius. Numquam.',
            'form_name' => 'Name',
            'form_email' => 'Email',
            'form_phone' => 'Phone',
            'form_subject' => 'Subject',
            'form_message' => 'Message',
            'form_submit' => 'SEND YOUR MESSAGE',
            'sidebar_map_i_class' => 'fa-street-view',
            'sidebar_info_li1_a_href' => '#',
            'sidebar_info_li1_i_class' => 'fa-map-marker',
            'sidebar_info_li1_text' => 'Lorem ipsum dolor, 25, Himara',
            'sidebar_info_li2_a_href' => '#',
            'sidebar_info_li2_i_class' => 'fa-envelope',
            'sidebar_info_li2_text' => 'contact@hotelhimara.com',
            'sidebar_info_li3_a_href' => '#',
            'sidebar_info_li3_i_class' => 'fa-phone',
            'sidebar_info_li3_text' => '+1 888 123 4567',
            'sidebar_info_li4_a_href' => '#',
            'sidebar_info_li4_i_class' => 'fa-fax',
            'sidebar_info_li4_text' => '+1 888 123 4567',
            'sidebar_info_li5_a_href' => '#',
            'sidebar_info_li5_i_class' => 'fa-globe',
            'sidebar_info_li5_text' => 'www.hotelhimara.com',
            'sidebar_social_facebook_title' => 'Facebook',
            'sidebar_social_facebook_href' => '#',
            'sidebar_social_facebook_i_class' => 'fa-facebook',
            'sidebar_social_twitter_title' => 'Twitter',
            'sidebar_social_twitter_href' => '#',
            'sidebar_social_twitter_i_class' => 'fa-twitter',
            'sidebar_social_googleplus_title' => 'Google Plus',
            'sidebar_social_googleplus_href' => '#',
            'sidebar_social_googleplus_i_class' => 'fa-google-plus',
            'sidebar_social_pinterest_title' => 'Pinterest',
            'sidebar_social_pinterest_href' => '#',
            'sidebar_social_pinterest_i_class' => 'fa-pinterest',
            'sidebar_social_linkedin_title' => 'Linkedin',
            'sidebar_social_linkedin_href' => '#',
            'sidebar_social_linkedin_i_class' => 'fa-linkedin',
            'sidebar_social_youtube_title' => 'Youtube',
            'sidebar_social_youtube_href' => '#',
            'sidebar_social_youtube_i_class' => 'fa-youtube',
            'sidebar_social_tripadvisor_title' => 'Tripadvisor',
            'sidebar_social_tripadvisor_href' => '#',
            'sidebar_social_tripadvisor_i_class' => 'fa-tripadvisor',
        ]);
    }
}
