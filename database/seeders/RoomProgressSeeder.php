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
                'progress_start' => '5 star',
                'progress_value' => '91',
            ],
            [
                'progress_start' => '4 star',
                'progress_value' => '0',
            ],
            [
                'progress_start' => '3 star',
                'progress_value' => '8',
            ],
            [
                'progress_start' => '2 star',
                'progress_value' => '0',
            ],
            [
                'progress_start' => '1 star',
                'progress_value' => '0',
            ],
        ]);
    }
}
