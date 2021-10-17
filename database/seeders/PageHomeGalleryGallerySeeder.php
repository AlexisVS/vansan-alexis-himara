<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageHomeGalleryGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_home_gallery_galleries')->insert([
            [
                'image_link' => 'images/gallery/gallery1.jpg',
                'image' => 'images/gallery/gallery1.jpg',
                'figcaption' => 'Swimming Pool',
            ],
            [
                'image_link' => 'images/gallery/gallery2.jpg',
                'image' => 'images/gallery/gallery2.jpg',
                'figcaption' => 'Room View',
            ],
            [
                'image_link' => 'images/gallery/gallery3.jpg',
                'image' => 'images/gallery/gallery3.jpg',
                'figcaption' => 'Cocktail',
            ],
            [
                'image_link' => 'images/gallery/gallery4.jpg',
                'image' => 'images/gallery/gallery4.jpg',
                'figcaption' => 'Breakfast',
            ],
            [
                'image_link' => 'images/gallery/gallery5.jpg',
                'image' => 'images/gallery/gallery5.jpg',
                'figcaption' => 'Playground',
            ],
            [
                'image_link' => 'images/gallery/gallery6.jpg',
                'image' => 'images/gallery/gallery6.jpg',
                'figcaption' => 'Restaurant',
            ],
            [
                'image_link' => 'images/gallery/gallery7.jpg',
                'image' => 'images/gallery/gallery7.jpg',
                'figcaption' => 'Wedding Ceremony',
            ],
            [
                'image_link' => 'images/gallery/gallery8.jpg',
                'image' => 'images/gallery/gallery8.jpg',
                'figcaption' => 'Beach',
            ],
            [
                'image_link' => 'images/gallery/gallery9.jpg',
                'image' => 'images/gallery/gallery9.jpg',
                'figcaption' => 'Honeymoon Room',
            ],
            [
                'image_link' => 'images/gallery/gallery10.jpg',
                'image' => 'images/gallery/gallery10.jpg',
                'figcaption' => 'Sea',
            ],
        ]);
    }
}
