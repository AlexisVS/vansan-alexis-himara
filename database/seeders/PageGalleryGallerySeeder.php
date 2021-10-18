<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageGalleryGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_gallery_galleries')->insert([
            [
                'class_filter' => 'filter-swimmingpool',
                'a_href' => 'gallery1.jpg',
                'img' => 'gallery1.jpg',
                'figcaption' => 'Swimming Pool'
            ],
            [
                'class_filter' => '',
                'a_href' => 'gallery2.jpg',
                'img' => 'gallery2.jpg',
                'figcaption' => 'Room View'
            ],
            [
                'class_filter' => '',
                'a_href' => 'gallery3.jpg',
                'img' => 'gallery3.jpg',
                'figcaption' => 'Cocktail'
            ],
            [
                'class_filter' => 'filter-restaurant',
                'a_href' => 'gallery4.jpg',
                'img' => 'gallery4.jpg',
                'figcaption' => 'Breakfast'
            ],
            [
                'class_filter' => '',
                'a_href' => 'gallery5.jpg',
                'img' => 'gallery5.jpg',
                'figcaption' => 'Playground'
            ],
            [
                'class_filter' => 'filter-restaurant',
                'a_href' => 'gallery6.jpg',
                'img' => 'gallery6.jpg',
                'figcaption' => 'Restaurant'
            ],
            [
                'class_filter' => '',
                'a_href' => 'gallery7.jpg',
                'img' => 'gallery7.jpg',
                'figcaption' => 'Wedding Ceremony'
            ],
            [
                'class_filter' => 'filter-roomview',
                'a_href' => 'gallery8.jpg',
                'img' => 'gallery8.jpg',
                'figcaption' => 'Beach'
            ],
            [
                'class_filter' => '',
                'a_href' => 'gallery9.jpg',
                'img' => 'gallery9.jpg',
                'figcaption' => 'Honeymoon Room'
            ],
            [
                'class_filter' => 'filter-roomview',
                'a_href' => 'gallery10.jpg',
                'img' => 'gallery10.jpg',
                'figcaption' => 'Sea'
            ],
            [
                'class_filter' => 'filter-spa',
                'a_href' => 'gallery11.jpg',
                'img' => 'gallery11.jpg',
                'figcaption' => 'Spa Therapy'
            ],
            [
                'class_filter' => 'filter-restaurant',
                'a_href' => 'gallery12.jpg',
                'img' => 'gallery12.jpg',
                'figcaption' => 'Restaurant'
            ],
            [
                'class_filter' => 'filter-roomview filter-restaurant',
                'a_href' => 'gallery13.jpg',
                'img' => 'gallery13.jpg',
                'figcaption' => 'Restaurant'
            ],
            [
                'class_filter' => '',
                'a_href' => 'gallery14.jpg',
                'img' => 'gallery14.jpg',
                'figcaption' => 'Sea'
            ],
            [
                'class_filter' => 'filter-restaurant',
                'a_href' => 'gallery15.jpg',
                'img' => 'gallery15.jpg',
                'figcaption' => 'Restaurant'
            ],
            [
                'class_filter' => 'filter-roomview',
                'a_href' => 'gallery16.jpg',
                'img' => 'gallery16.jpg',
                'figcaption' => 'Room View'
            ],
        ]);
    }
}
