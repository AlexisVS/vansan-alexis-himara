<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            'brand-href' => '/',
            'brand-img' => 'logo.svg',
            'menu-li1-href' => '/',
            'menu-li1-text' => 'HOME',
            'menu-li2-href' => '/room',
            'menu-li2-text' => 'ROOMS',
            'menu-li3-href' => '/team',
            'menu-li3-text' => 'TEAM',
            'menu-li4-href' => '/gallery',
            'menu-li4-text' => 'GALLERY',
            'menu-li5-href' => '/contact',
            'menu-li5-text' => 'CONTACT US',
            'menu-li6a-href' => '/booking-form',
            'menu-li6a-class' => 'fa-user',
            'menu-li6a-text' => 'Reservation',
            'menu-li6b-href' => '/login',
            'menu-li6b-class' => 'fa-user',
            'menu-li6b-text' => 'LOG IN',
        ]);
    }
}
