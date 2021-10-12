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
            'w1-logo' => 'logo.svg',
            'w1-inner-text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, velit placeat assumenda incidunt dolorem aliquam!',
            'w1-a-href' => 'https://www.tripadvisor.com/',
            'w1-a-span' => 'Recommended',
            'w1-a-img' => 'tripadvisor.png',
            'w2-h3' => 'LATEST NEWS',
            'w3-h3' => 'USEFUL LINKS',
            'w3-a1-href' => '/about',
            'w3-a1-text' => 'About Us',
            'w3-a2-href' => '/contact',
            'w3-a2-text' => 'Contact Us',
            'w3-a3-href' => '/shop',
            'w3-a3-text' => 'Shop',
            'w3-a4-href' => '/gallery',
            'w3-a4-text' => 'Himara Gallery',
            'w3-a5-href' => '/location',
            'w3-a5-text' => 'Our Location',
            'w4-h3' => 'Contact Info',
            'w4-li1-i-class' => 'fa-map-marker',
            'w4-li1-text' => 'Lorem ipsum dolor, 25, Himara',
            'w4-li2-i-class' => 'fa-phone',
            'w4-li2-text' => 'Phone: +1 888 123 4567',
            'w4-li3-i-class' => 'fa-fax',
            'w4-li3-text' => 'Fax: +1 888 123 4567',
            'w4-li4-i-class' => 'fa-globe',
            'w4-li4-text' => 'Web: www.hotelhimara.com',
            'w4-li5-i-class' => 'fa-envelope',
            'w4-li5-li-text' => 'mailto:info@site.com',
            'w4-li5-text' => 'contact@hotelhimara.com',
            'sf-copyright' => '& 2018 Hotel Himara. Designed by',
            'sf-copyright-href' => 'https://eagle-themes.com/',
            'sf-copyright-text' => 'Eagle-Themes',
            'sf-sm-facebook-href' => '#',
            'sf-sm-facebook-text' => 'facebook',
            'sf-sm-twitter-href' => '#',
            'sf-sm-twitter-text' => 'twitter',
            'sf-sm-googleplus-href' => '#',
            'sf-sm-googleplus-text' => 'googleplus',
            'sf-sm-pinterest-href' => '#',
            'sf-sm-pinterest-text' => 'pinterest',
            'sf-sm-linkedin-href' => '#',
            'sf-sm-linkedin-text' => 'linkedin',
            'sf-sm-youtube-href' => '#',
            'sf-sm-youtube-text' => 'youtube',
            'sf-sm-instagram-href' => '#',
            'sf-sm-instagram-text' => 'instagram',
        ]);
    }
}