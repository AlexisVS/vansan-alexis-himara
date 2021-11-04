<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageTeamTeamCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_team_team_categories')->insert([
            ['name' => 'Housekeeper'],
            ['name' => 'Receptionist'],
            ['name' => 'Chef'],
            ['name' => 'Hotel Manager'],
            ['name' => 'Room Service'],
            ['name' => 'Marketing Advisor'],
        ]);
    }
}
