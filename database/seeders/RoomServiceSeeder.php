<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_services')->insert([
            [
                'displayed_card' => TRUE,
                'span_card' => 'Beds: 2 King',
                'active' => TRUE,
                'name1' => 'Double Bed',
                'name2' => '',
                'value1' => '',
                'value2' => '',
                'i_class' => '',
                'similar_rooms_room_services_i_data_content' => '',
                'similar_rooms_room_services_i_data_title' => '',
            ],
            [
                'displayed_card' => TRUE,
                'span_card' => 'Max Guests: 4',
                'active' => TRUE,
                'name1' => '',
                'name2' => '',
                'value1' => '',
                'value2' => '',
                'i_class' => '',
                'similar_rooms_room_services_i_data_content' => '',
                'similar_rooms_room_services_i_data_title' => '',
            ],
            [
                'displayed_card' => FALSE,
                'span_card' => '',
                'active' => TRUE,
                'name1' => '80 Sq mt',
                'name2' => '',
                'value1' => '',
                'value2' => '',
                'i_class' => '',
                'similar_rooms_room_services_i_data_content' => '',
                'similar_rooms_room_services_i_data_title' => '',
            ],
            [
                'displayed_card' => FALSE,
                'span_card' => '',
                'active' => TRUE,
                'name1' => '3 Persons',
                'name2' => '',
                'value1' => '',
                'value2' => '',
                'i_class' => '',
                'similar_rooms_room_services_i_data_content' => '',
                'similar_rooms_room_services_i_data_title' => '',
            ],
            [
                'displayed_card' => FALSE,
                'span_card' => '',
                'active' => TRUE,
                'name1' => 'Free Internet',
                'name2' => '',
                'value1' => '',
                'value2' => '',
                'i_class' => '',
                'similar_rooms_room_services_i_data_content' => '',
                'similar_rooms_room_services_i_data_title' => '',
            ],
            [
                'displayed_card' => FALSE,
                'span_card' => '',
                'active' => TRUE,
                'name1' => 'Free Wi-Fi',
                'name2' => '',
                'value1' => '',
                'value2' => '',
                'i_class' => 'fa-wifi',
                'similar_rooms_room_services_i_data_content' => 'Free WiFi',
                'similar_rooms_room_services_i_data_title' => 'WiFi',
            ],
            [
                'displayed_card' => FALSE,
                'span_card' => '',
                'active' => TRUE,
                'name1' => 'Breakfast Include',
                'name2' => '',
                'value1' => '',
                'value2' => '',
                'i_class' => 'fa-coffee',
                'similar_rooms_room_services_i_data_content' => 'Breakfast Included',
                'similar_rooms_room_services_i_data_title' => 'Breakfast',
            ],
            [
                'displayed_card' => FALSE,
                'span_card' => '',
                'active' => TRUE,
                'name1' => 'Private Balcony',
                'name2' => '',
                'value1' => '',
                'value2' => '',
                'i_class' => '',
                'similar_rooms_room_services_i_data_content' => '',
                'similar_rooms_room_services_i_data_title' => '',
            ],
            [
                'displayed_card' => FALSE,
                'span_card' => '',
                'active' => FALSE,
                'name1' => 'Free Newspaper',
                'name2' => '',
                'value1' => '',
                'value2' => '',
                'i_class' => '',
                'similar_rooms_room_services_i_data_content' => '',
                'similar_rooms_room_services_i_data_title' => '',
            ],
            [
                'displayed_card' => FALSE,
                'span_card' => '',
                'active' => FALSE,
                'name1' => 'Flat Screen Tv',
                'name2' => '',
                'value1' => '',
                'value2' => '',
                'i_class' => 'fa-television',
                'similar_rooms_room_services_i_data_content' => 'Plasma TV with cable channels',
                'similar_rooms_room_services_i_data_title' => 'TV',
            ],
            [
                'displayed_card' => FALSE,
                'span_card' => '',
                'active' => TRUE,
                'name1' => 'Full Ac',
                'name2' => '',
                'value1' => '',
                'value2' => '',
                'i_class' => '',
                'similar_rooms_room_services_i_data_content' => '',
                'similar_rooms_room_services_i_data_title' => '',
            ],
            [
                'displayed_card' => FALSE,
                'span_card' => '',
                'active' => False,
                'name1' => 'Beach View',
                'name2' => '',
                'value1' => '',
                'value2' => '',
                'i_class' => '',
                'similar_rooms_room_services_i_data_content' => '',
                'similar_rooms_room_services_i_data_title' => '',
            ],
            [
                'displayed_card' => FALSE,
                'span_card' => '',
                'active' => TRUE,
                'name1' => 'Room Service',
                'name2' => '',
                'value1' => '',
                'value2' => '',
                'i_class' => '',
                'similar_rooms_room_services_i_data_content' => '',
                'similar_rooms_room_services_i_data_title' => '',
            ],
        ]);
    }
}