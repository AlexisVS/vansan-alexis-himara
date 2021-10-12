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
                'layer1-text' => 'TOUCH THE DREAM',
                'layer2-text' => 'Live Your Myth In Hotel Himara',
                'layer3-href' => '/booking-form',
                'layer3-i-class' => 'fa-calendar',
                'layer3-text' => 'BOOK A ROOM NOW',
                'layer4-href' => '/contact',
                'layer4-i-class' => 'fa-envelope-o',
                'layer4-text' => 'CONTACT US NOW',
                'layer5-i-class' => 'fa-star-o',
                'layer6-text' => 'Star Luxury Hotel',
            ],
            [
                'mainImage' => 'slider3.jpg',
                'layer1-text' => 'WHERE DREAMS COME TRUE',
                'layer2-text' => "You'll Never Forget Your Stay",
                'layer3-href' => '',
                'layer3-i-class' => '',
                'layer3-text' => '',
                'layer4-href' => '',
                'layer4-i-class' => '',
                'layer4-text' => '',
                'layer5-i-class' => '',
                'layer6-text' => '',
            ],
            [
                'mainImage' => 'slider13.jpg',
                'layer1-text' => 'ENJOY YOUR HOLIDAYS',
                'layer2-text' => 'Family Room from €89 per night',
                'layer3-href' => '',
                'layer3-i-class' => '',
                'layer3-text' => '',
                'layer4-href' => '',
                'layer4-i-class' => '',
                'layer4-text' => '',
                'layer5-i-class' => '',
                'layer6-text' => '',
            ],
        ]);
    }
}
