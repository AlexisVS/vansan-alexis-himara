<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_reviews')->insert([
            [
                'rating' => '5',
                'rating_i_class' => 'fa-star',
                'review_info' => 'Marlene Simpson – February 03, 2018',
                'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quis rem esse quaerat eius labore repellendus, odit officia, quas provident reprehenderit magnam adipisci inventore quibusdam est architecto nisi.',
                'room_id' => 1,
            ],
            [
                'rating' => '5',
                'rating_i_class' => 'fa-star',
                'review_info' => 'Brad Knight – January 17, 2018',
                'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium omnis, eius impedit cum. Necessitatibus illum veritatis, consequatur quia itaque tenetur recusandae nostrum quod aperiam.',
                'room_id' => 1,
            ],
            [
                'rating' => '5',
                'rating_i_class' => 'fa-star',
                'review_info' => 'Daryl Phillips – August 16, 2017',
                'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim id, facere porro. Ipsum quia maxime atque adipisci inventore dolor nesciunt, molestias voluptatum, ab dignissimos! Alias.',
                'room_id' => 1,
            ],
            [
                'rating' => '3',
                'rating_i_class' => 'fa-star',
                'review_info' => 'Maaaaaaaaarlene Simpson – February 03, 2018',
                'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quis rem esse quaerat eius labore repellendus, odit officia, quas provident reprehenderit magnam adipisci inventore quibusdam est architecto nisi.',
                'room_id' => 2,
            ],
            [
                'rating' => '4',
                'rating_i_class' => 'fa-star',
                'review_info' => 'Braaaaaaaaaaad Knight – January 17, 2018',
                'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium omnis, eius impedit cum. Necessitatibus illum veritatis, consequatur quia itaque tenetur recusandae nostrum quod aperiam.',
                'room_id' => 2,
            ],
            [
                'rating' => '1',
                'rating_i_class' => 'fa-star',
                'review_info' => 'Daaaaaaaaaaaryl Phillips – August 16, 2017',
                'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim id, facere porro. Ipsum quia maxime atque adipisci inventore dolor nesciunt, molestias voluptatum, ab dignissimos! Alias.',
                'room_id' => 2,
            ],
            [
                'rating' => '3',
                'rating_i_class' => 'fa-star',
                'review_info' => 'Maaaaaaaaarlene Simpson – February 03, 2018',
                'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quis rem esse quaerat eius labore repellendus, odit officia, quas provident reprehenderit magnam adipisci inventore quibusdam est architecto nisi.',
                'room_id' => 2,
            ],
            [
                'rating' => '5',
                'rating_i_class' => 'fa-star',
                'review_info' => 'Braaaaaaaaaaad Knight – January 17, 2018',
                'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium omnis, eius impedit cum. Necessitatibus illum veritatis, consequatur quia itaque tenetur recusandae nostrum quod aperiam.',
                'room_id' => 2,
            ],
            [
                'rating' => '1',
                'rating_i_class' => 'fa-star',
                'review_info' => 'Daaaaaaaaaaaryl Phillips – August 16, 2017',
                'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim id, facere porro. Ipsum quia maxime atque adipisci inventore dolor nesciunt, molestias voluptatum, ab dignissimos! Alias.',
                'room_id' => 2,
            ],
            [
                'rating' => '3',
                'rating_i_class' => 'fa-star',
                'review_info' => 'Maaaaaaaaarlene Simpson – February 03, 2018',
                'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quis rem esse quaerat eius labore repellendus, odit officia, quas provident reprehenderit magnam adipisci inventore quibusdam est architecto nisi.',
                'room_id' => 3,
            ],
            [
                'rating' => '5',
                'rating_i_class' => 'fa-star',
                'review_info' => 'Braaaaaaaaaaad Knight – January 17, 2018',
                'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium omnis, eius impedit cum. Necessitatibus illum veritatis, consequatur quia itaque tenetur recusandae nostrum quod aperiam.',
                'room_id' => 4,
            ],
            [
                'rating' => '1',
                'rating_i_class' => 'fa-star',
                'review_info' => 'Daaaaaaaaaaaryl Phillips – August 16, 2017',
                'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim id, facere porro. Ipsum quia maxime atque adipisci inventore dolor nesciunt, molestias voluptatum, ab dignissimos! Alias.',
                'room_id' => 4,
            ],
            [
                'rating' => '3',
                'rating_i_class' => 'fa-star',
                'review_info' => 'Maaaaaaaaarlene Simpson – February 03, 2018',
                'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quis rem esse quaerat eius labore repellendus, odit officia, quas provident reprehenderit magnam adipisci inventore quibusdam est architecto nisi.',
                'room_id' => 4,
            ],
            [
                'rating' => '5',
                'rating_i_class' => 'fa-star',
                'review_info' => 'Braaaaaaaaaaad Knight – January 17, 2018',
                'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium omnis, eius impedit cum. Necessitatibus illum veritatis, consequatur quia itaque tenetur recusandae nostrum quod aperiam.',
                'room_id' => 4,
            ],
            [
                'rating' => '1',
                'rating_i_class' => 'fa-star',
                'review_info' => 'Daaaaaaaaaaaryl Phillips – August 16, 2017',
                'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim id, facere porro. Ipsum quia maxime atque adipisci inventore dolor nesciunt, molestias voluptatum, ab dignissimos! Alias.',
                'room_id' => 4,
            ],
            [
                'rating' => '3',
                'rating_i_class' => 'fa-star',
                'review_info' => 'Maaaaaaaaarlene Simpson – February 03, 2018',
                'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quis rem esse quaerat eius labore repellendus, odit officia, quas provident reprehenderit magnam adipisci inventore quibusdam est architecto nisi.',
                'room_id' => 4,
            ],
            [
                'rating' => '5',
                'rating_i_class' => 'fa-star',
                'review_info' => 'Braaaaaaaaaaad Knight – January 17, 2018',
                'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium omnis, eius impedit cum. Necessitatibus illum veritatis, consequatur quia itaque tenetur recusandae nostrum quod aperiam.',
                'room_id' => 4,
            ],
            [
                'rating' => '1',
                'rating_i_class' => 'fa-star',
                'review_info' => 'Daaaaaaaaaaaryl Phillips – August 16, 2017',
                'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim id, facere porro. Ipsum quia maxime atque adipisci inventore dolor nesciunt, molestias voluptatum, ab dignissimos! Alias.',
                'room_id' => 4,
            ],
            [
                'rating' => '3',
                'rating_i_class' => 'fa-star',
                'review_info' => 'Maaaaaaaaarlene Simpson – February 03, 2018',
                'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quis rem esse quaerat eius labore repellendus, odit officia, quas provident reprehenderit magnam adipisci inventore quibusdam est architecto nisi.',
                'room_id' => 4,
            ],
            [
                'rating' => '5',
                'rating_i_class' => 'fa-star',
                'review_info' => 'Braaaaaaaaaaad Knight – January 17, 2018',
                'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium omnis, eius impedit cum. Necessitatibus illum veritatis, consequatur quia itaque tenetur recusandae nostrum quod aperiam.',
                'room_id' => 4,
            ],
            [
                'rating' => '3',
                'rating_i_class' => 'fa-star',
                'review_info' => 'Daaaaaaaaaaaryl Phillips – August 16, 2017',
                'review_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim id, facere porro. Ipsum quia maxime atque adipisci inventore dolor nesciunt, molestias voluptatum, ab dignissimos! Alias.',
                'room_id' => 4,
            ],
        ]);
    }
}
