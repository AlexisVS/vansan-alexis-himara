<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlaticonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flaticons')->insert([
            ['class' => 'flaticon-full-screen', 'content' => 'f100'],
            ['class' => 'flaticon-search', 'content' => 'f101'],
            ['class' => 'flaticon-link', 'content' => 'f102'],
            ['class' => 'flaticon-add', 'content' => 'f103'],
            ['class' => 'flaticon-tray-1', 'content' => 'f104'],
            ['class' => 'flaticon-screen-1', 'content' => 'f105'],
            ['class' => 'flaticon-nature', 'content' => 'f106'],
            ['class' => 'flaticon-slider', 'content' => 'f107'],
            ['class' => 'flaticon-tray', 'content' => 'f108'],
            ['class' => 'flaticon-hotel', 'content' => 'f109'],
            ['class' => 'flaticon-sports', 'content' => 'f10a'],
            ['class' => 'flaticon-bell-boy', 'content' => 'f10b'],
            ['class' => 'flaticon-screen', 'content' => 'f10c'],
            ['class' => 'flaticon-information-button', 'content' => 'f10d'],
        ]);
    }
}
