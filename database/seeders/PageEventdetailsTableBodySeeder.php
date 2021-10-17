<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageEventdetailsTableBodySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_eventdetails_table_bodies')->insert([
            [
                'text1' => 'Jane',
                'text2' => 'Doe',
                'text3' => '13',
                'text4' => '',
                'text5' => '',
            ],
            [
                'text1' => 'Eve',
                'text2' => 'Doe',
                'text3' => '94',
                'text4' => '',
                'text5' => '',
            ],
            [
                'text1' => 'Jane',
                'text2' => 'Doe',
                'text3' => '77',
                'text4' => '',
                'text5' => '',
            ],
            [
                'text1' => 'Ina',
                'text2' => 'Aldrich',
                'text3' => '16',
                'text4' => '',
                'text5' => '',
            ],
        ]);
    }
}
