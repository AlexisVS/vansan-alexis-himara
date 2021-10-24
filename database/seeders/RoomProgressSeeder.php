<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomProgressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_progresses')->insert([
            [
                'progress1_start' => '5 star',
                'progress1_value' => '91',
                'progress2_start' => '4 star',
                'progress2_value' => '0',
                'progress3_start' => '3 star',
                'progress3_value' => '8',
                'progress4_start' => '2 star',
                'progress4_value' => '0',
                'progress5_start' => '1 star',
                'progress5_value' => '0',
                'room_id' => 1,
            ],
        ]);
    }
}
