<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_categories')->insert([
            [
                'value' => 'Single',
                'text' => 'Single Room',
            ],
            [
                'value' => 'Double',
                'text' => 'Double Room',
            ],
            [
                'value' => 'Deluxe',
                'text' => 'Deluxe Room',
            ],
            [
                'value' => 'Family',
                'text' => 'Family Room',
            ],
        ]);
    }
}
