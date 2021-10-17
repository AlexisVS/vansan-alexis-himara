<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayoutHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('layout_headers')->insert([
            'brand_href' => '/',
            'brand_img' => 'logo.svg',
            'menu_li1_href' => '/',
            'menu_li1_text' => 'HOME',
            'menu_li2_href' => '/room',
            'menu_li2_text' => 'ROOMS',
            'menu_li3_href' => '/team',
            'menu_li3_text' => 'TEAM',
            'menu_li4_href' => '/gallery',
            'menu_li4_text' => 'GALLERY',
            'menu_li5_href' => '/contact',
            'menu_li5_text' => 'CONTACT US',
            'menu_li6a_href' => '/booking-form',
            'menu_li6a_class' => 'fa-user',
            'menu_li6a_text' => 'Reservation',
            'menu_li6b_href' => '/login',
            'menu_li6b_class' => 'fa-user',
            'menu_li6b_text' => 'LOG IN',
        ]);
    }
}