<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageEventdetailsTableHeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_eventdetails_table_heads')->insert([
                'head1' => 'Name',
                'head2' => 'Nickname',
                'head3' => 'Number',
                'head4' => '',
                'head5' => '',
        ]);
    }
}
