<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_images')->insert([
            [
                'image' => 'single1.jpg',
                'room_id' => 1
            ],
            [
                'image' => 'single2.jpg',
                'room_id' => 1
            ],
            [
                'image' => 'single3.jpg',
                'room_id' => 1
            ],
            [
                'image' => 'single4.jpg',
                'room_id' => 1
            ],
            [
                'image' => 'single5.jpg',
                'room_id' => 1
            ],
            [
                'image' => 'single6.jpg',
                'room_id' => 1
            ],
            [
                'image' => 'single7.jpg',
                'room_id' => 1
            ],
            [
                'image' => 'single8.jpg',
                'room_id' => 1
            ],
        ]);
    }
}
