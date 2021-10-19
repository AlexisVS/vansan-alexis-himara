<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageTeamTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_team_teams')->insert([
            [
                'figure_img' => 'staff1.jpg',
                'figure_text' => 'Housekeeper',
                'details_name' => 'Jeanette Owens',
                'details_text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',
            ],
            [
                'figure_img' => 'staff2.jpg',
                'figure_text' => 'Receptionist',
                'details_name' => 'Henry Garrett',
                'details_text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',
            ],
            [
                'figure_img' => 'staff3.jpg',
                'figure_text' => 'Chef',
                'details_name' => 'Tommy Alexander',
                'details_text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',
            ],
            [
                'figure_img' => 'staff4.jpg',
                'figure_text' => 'Hotel Manager',
                'details_name' => 'Penny Soto',
                'details_text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',
            ],
            [
                'figure_img' => 'staff5.jpg',
                'figure_text' => 'Room Service',
                'details_name' => 'Alex Cox',
                'details_text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',
            ],
            [
                'figure_img' => 'staff6.jpg',
                'figure_text' => 'Hotel Manager',
                'details_name' => 'Alfredo Romero',
                'details_text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',
            ],
            [
                'figure_img' => 'staff7.jpg',
                'figure_text' => 'Marketing Advisor',
                'details_name' => 'Glenda Gilbert',
                'details_text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',
            ],
            [
                'figure_img' => 'staff8.jpg',
                'figure_text' => 'Hotel Manager',
                'details_name' => 'Sheila Carter',
                'details_text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',
            ],
        ]);
    }
}
