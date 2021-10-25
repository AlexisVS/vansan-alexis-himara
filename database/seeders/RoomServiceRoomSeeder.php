<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomServiceRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_service_rooms')->insert([
            [
                'room_service_id' => 1,
                'room_id' => 1,
            ],
            [
                'room_service_id' => 2,
                'room_id' => 1,
            ],
            [
                'room_service_id' => 3,
                'room_id' => 1,
            ],
            [
                'room_service_id' => 4,
                'room_id' => 1,
            ],
            [
                'room_service_id' => 5,
                'room_id' => 1,
            ],
            [
                'room_service_id' => 6,
                'room_id' => 1,
            ],
            [
                'room_service_id' => 7,
                'room_id' => 1,
            ],
            [
                'room_service_id' => 8,
                'room_id' => 1,
            ],
            [
                'room_service_id' => 9,
                'room_id' => 1,
            ],



            [
                'room_service_id' => 2,
                'room_id' => 2,
            ],
            [
                'room_service_id' => 3,
                'room_id' => 2,
            ],
            [
                'room_service_id' => 4,
                'room_id' => 2,
            ],
            [
                'room_service_id' => 5,
                'room_id' => 2,
            ],



            [
                'room_service_id' => 1,
                'room_id' => 3,
            ],

            [
                'room_service_id' => 3,
                'room_id' => 3,
            ],

            [
                'room_service_id' => 5,
                'room_id' => 3,
            ],

            [
                'room_service_id' => 7,
                'room_id' => 3,
            ],

            [
                'room_service_id' => 9,
                'room_id' => 3,
            ],







            [
                'room_service_id' => 2,
                'room_id' => 4,
            ],

            [
                'room_service_id' => 4,
                'room_id' => 4,
            ],

            [
                'room_service_id' => 6,
                'room_id' => 4,
            ],

            [
                'room_service_id' => 8,
                'room_id' => 4,
            ],

        ]);
    }
}
