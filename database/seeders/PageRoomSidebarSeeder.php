<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageRoomSidebarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_room_sidebars')->insert([
            'sidebar_title' => 'BOOK YOUR ROOM',
            'sidebar_form_email_placeholder' => 'Your Email Address',
            'sidebar_form_roomtype_title' => 'Select Room Type',
            'sidebar_form_roomtype_data_header' => 'Room Type',
            'sidebar_form_date_placeholder' => 'Slect Arrival & Departure Date',
            'sidebar_form_guestspicker' => 'Guests',
            'sidebar_form_label1' => 'Adults',
            'sidebar_form_label1_data_content' => '18+ years',
            'sidebar_form_label1_data_title' => 'Adults',
            'sidebar_form_label1_i_class' => 'fa-info-circle',
            'sidebar_form_label2' => 'Children',
            'sidebar_form_label2_data_content' => 'Under 18 years',
            'sidebar_form_label2_data_title' => 'Children',
            'sidebar_form_label2_i_class' => 'fa-info-circle',
            'sidebar_form_submit' => 'BOOK A ROOM',
        ]);
    }
}
