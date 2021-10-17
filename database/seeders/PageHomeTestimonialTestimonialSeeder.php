<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageHomeTestimonialTestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_home_testimonial_testimonials')->insert([
            [
                'img' => 'user1.jpg',
                'author_name' => 'Marlene Simpson',
                'author_location' => 'Madrid / Spain',
                'rating_i_class' => 'fa-star',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.',
            ],
            [
                'img' => 'user2.jpg',
                'author_name' => 'Brad Knight',
                'author_location' => 'Athens / Greece',
                'rating_i_class' => 'fa-star',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.',
            ],
            [
                'img' => 'user3.jpg',
                'author_name' => 'Daryl Phillips',
                'author_location' => 'Lisbon / Portugal',
                'rating_i_class' => 'fa-star',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.',
            ],
            [
                'img' => 'user4.jpg',
                'author_name' => 'Felecia Lawson',
                'author_location' => 'Paris / France',
                'rating_i_class' => 'fa-star',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.',
            ],
            [
                'img' => 'user5.jpg',
                'author_name' => 'Joanne Robinson',
                'author_location' => 'New York /',
                'rating_i_class' => 'fa-star',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.',
            ],
            [
                'img' => 'user6.jpg',
                'author_name' => 'Emily Hill',
                'author_location' => 'Rome / Italy',
                'rating_i_class' => 'fa-star',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.',
            ],
            [
                'img' => 'user7.jpg',
                'author_name' => 'Mabel Hicks',
                'author_location' => 'Moscow / Russia',
                'rating_i_class' => 'fa-star',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.',
            ],
            [
                'img' => 'user8.jpg',
                'author_name' => 'Kent Lambert',
                'author_location' => 'Berlin / Germany',
                'rating_i_class' => 'fa-star',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.',
            ],
            [
                'img' => 'user9.jpg',
                'author_name' => 'Gerald Schmidt',
                'author_location' => 'Zagreb / Croatia',
                'rating_i_class' => 'fa-star',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.',
            ],
        ]);
    }
}
