<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            [
                'class_filter' => 'filter-swimmingpool',
                'img' => 'gallery1.jpg',
                'figcaption' => 'Swimming Pool'
            ],
            [
                'class_filter' => '',
                'img' => 'gallery2.jpg',
                'figcaption' => 'Room View'
            ],
            [
                'class_filter' => '',
                'img' => 'gallery3.jpg',
                'figcaption' => 'Cocktail'
            ],
            [
                'class_filter' => 'filter-restaurant',
                'img' => 'gallery4.jpg',
                'figcaption' => 'Breakfast'
            ],
            [
                'class_filter' => '',
                'img' => 'gallery5.jpg',
                'figcaption' => 'Playground'
            ],
            [
                'class_filter' => 'filter-restaurant',
                'img' => 'gallery6.jpg',
                'figcaption' => 'Restaurant'
            ],
            [
                'class_filter' => '',
                'img' => 'gallery7.jpg',
                'figcaption' => 'Wedding Ceremony'
            ],
            [
                'class_filter' => 'filter-roomview',
                'img' => 'gallery8.jpg',
                'figcaption' => 'Beach'
            ],
            [
                'class_filter' => '',
                'img' => 'gallery9.jpg',
                'figcaption' => 'Honeymoon Room'
            ],
            [
                'class_filter' => 'filter-roomview',
                'img' => 'gallery10.jpg',
                'figcaption' => 'Sea'
            ],
            [
                'class_filter' => 'filter-spa',
                'img' => 'gallery11.jpg',
                'figcaption' => 'Spa Therapy'
            ],
            [
                'class_filter' => 'filter-restaurant',
                'img' => 'gallery12.jpg',
                'figcaption' => 'Restaurant'
            ],
            [
                'class_filter' => 'filter-roomview filter-restaurant',
                'img' => 'gallery13.jpg',
                'figcaption' => 'Restaurant'
            ],
            [
                'class_filter' => '',
                'img' => 'gallery14.jpg',
                'figcaption' => 'Sea'
            ],
            [
                'class_filter' => 'filter-restaurant',
                'img' => 'gallery15.jpg',
                'figcaption' => 'Restaurant'
            ],
            [
                'class_filter' => 'filter-roomview',
                'img' => 'gallery16.jpg',
                'figcaption' => 'Room View'
            ],
        ]);
    }
}
