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
            ['image' => 'single1.jpg'],
            ['image' => 'single2.jpg'],
            ['image' => 'single3.jpg'],
            ['image' => 'single4.jpg'],
            ['image' => 'single5.jpg'],
            ['image' => 'single6.jpg'],
            ['image' => 'single7.jpg'],
            ['image' => 'single8.jpg'],
        ]);
    }
}
