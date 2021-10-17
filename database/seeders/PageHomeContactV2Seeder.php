<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageHomeContactV2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_home_contact-v2s')->insert([
            'section_title1_h4' => 'GET IN TOUCH',
            'section_title1_p' => 'Get in touch',
            'contact_details_li1_i_class' => 'fa-map-marker',
            'contact_details_li1_text' => 'Lorem ipsum dolor, 25, Himara',
            'contact_details_li2_i_class' => 'fa-phone',
            'contact_details_li2_text' => 'Phone: +1 888 123 4567',
            'contact_details_li3_i_class' => 'fa-fax',
            'contact_details_li3_text' => 'Fax: +1 888 123 4567',
            'contact_details_li4_i_class' => 'fa-globe',
            'contact_details_li4_text' => 'Web: www.hotelhimara.com',
            'contact_details_li5_i_class' => 'fa-envelope',
            'contact_details_li5_text' => 'Email:',
            'contact_details_li5_a_href' => 'mailto:info@site.com',
            'contact_details_li5_a_text' => 'contact@hotelhimara.com',
            'section_title2_h4' => 'CONTACT US',
            'section_title2_p' => 'Say hello',
            'form_input1_placeholder' => 'Your Name',
            'form_input2_placeholder' => 'Your Email Address',
            'form_input3_placeholder' => 'Your Message',
            'form_submit_i_class' => 'fa-location-arrow',
            'form_submit_text' => 'Send Message',
        ]);
    }
}
