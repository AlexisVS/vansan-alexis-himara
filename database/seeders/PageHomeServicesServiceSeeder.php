<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageHomeServicesServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_home_services_services')->insert([
            [
                'fig_img' => 'restaurant.jpg',
                'fig_title' => 'Restaurant',
                'slider_i-class' => 'flaticon-tray-1',
                'slider_title' => 'Restaurant',
                'slider_text' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                ut laoreet.'
            ],
            [
                'fig_img' => 'spa.jpg',
                'fig_title' => 'Spa',
                'slider_i-class' => 'flaticon-nature',
                'slider_title' => 'Spa - Beauty & Health',
                'slider_text' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                ut laoreet.'
            ],
            [
                'fig_img' => 'conference.jpg',
                'fig_title' => 'Conference Room',
                'slider_i-class' => 'flaticon-screen-1',
                'slider_title' => 'Conference Room',
                'slider_text' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                ut laoreet.'
            ],
            [
                'fig_img' => 'swimming.jpg',
                'fig_title' => 'Swimming Pool',
                'slider_i-class' => 'flaticon-sports',
                'slider_title' => 'Swimming Pool',
                'slider_text' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                ut laoreet.'
            ],
        ]);
    }
}
