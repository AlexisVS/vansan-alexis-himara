<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageHomeRestaurantRestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_home_restaurant_restaurants')->insert([
            [
                'img' => 'restaurant1.jpg',
                'title_name' => 'Salat',
                'title_price' => '€16.99',
                'text' => 'Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut laoreet...',
            ],
            [
                'img' => 'restaurant2.jpg',
                'title_name' => 'Croquettes',
                'title_price' => '€9.99',
                'text' => 'Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut laoreet...',
            ],
        ]);
    }
}
