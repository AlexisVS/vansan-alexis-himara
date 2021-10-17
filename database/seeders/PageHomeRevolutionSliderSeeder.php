<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageHomeRevolutionSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_home_revolution-sliders')->insert([
            [
                'mainImage' => 'slider1.jpg',
                'layer1_text' => 'TOUCH THE DREAM',
                'layer2_text' => 'Live Your Myth In Hotel Himara',
                'layer3_href' => '/booking-form',
                'layer3_i_class' => 'fa-calendar',
                'layer3_text' => 'BOOK A ROOM NOW',
                'layer4_href' => '/contact',
                'layer4_i_class' => 'fa-envelope-o',
                'layer4_text' => 'CONTACT US NOW',
                'layer5_i_class' => 'fa-star-o',
                'layer6_text' => 'Star Luxury Hotel',
            ],
            [
                'mainImage' => 'slider3.jpg',
                'layer1_text' => 'WHERE DREAMS COME TRUE',
                'layer2_text' => "You'll Never Forget Your Stay",
                'layer3_href' => '',
                'layer3_i_class' => '',
                'layer3_text' => '',
                'layer4_href' => '',
                'layer4_i_class' => '',
                'layer4_text' => '',
                'layer5_i_class' => '',
                'layer6_text' => '',
            ],
            [
                'mainImage' => 'slider13.jpg',
                'layer1_text' => 'ENJOY YOUR HOLIDAYS',
                'layer2_text' => 'Family Room from €89 per night',
                'layer3_href' => '',
                'layer3_i_class' => '',
                'layer3_text' => '',
                'layer4_href' => '',
                'layer4_i_class' => '',
                'layer4_text' => '',
                'layer5_i_class' => '',
                'layer6_text' => '',
            ],
        ]);
    }
}
