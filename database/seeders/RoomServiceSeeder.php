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
                'room_service_text' => 'Double Bed',
                'span_card' => 'Beds: 2 King',
                'i_class' => '',
                'similar_rooms_room_services_i_data_content' => '',
                'similar_rooms_room_services_i_data_title' => '',
            ],
            [
                'displayed_card' => TRUE,
                'room_service_text' => '5 persons',
                'span_card' => 'Max Guests: 4',
                'i_class' => '',
                'similar_rooms_room_services_i_data_content' => '',
                'similar_rooms_room_services_i_data_title' => '',
            ],
            [
                'displayed_card' => FALSE,
                'room_service_text' => '80 Sq mt',
                'span_card' => '',
                'i_class' => '',
                'similar_rooms_room_services_i_data_content' => '',
                'similar_rooms_room_services_i_data_title' => '',
            ],
            [
                'displayed_card' => FALSE,
                'room_service_text' => '3 Persons',
                'span_card' => '',
                'i_class' => '',
                'similar_rooms_room_services_i_data_content' => '',
                'similar_rooms_room_services_i_data_title' => '',
            ],
            [
                'displayed_card' => FALSE,
                'room_service_text' => 'Free Internet',
                'span_card' => '',
                'i_class' => '',
                'similar_rooms_room_services_i_data_content' => '',
                'similar_rooms_room_services_i_data_title' => '',
            ],
            [
                'displayed_card' => FALSE,
                'room_service_text' => 'Free Wi-Fi',
                'span_card' => '',
                'i_class' => 'fa-wifi',
                'similar_rooms_room_services_i_data_content' => 'Free WiFi',
                'similar_rooms_room_services_i_data_title' => 'WiFi',
            ],
            [
                'displayed_card' => FALSE,
                'room_service_text' => 'Breakfast Include',
                'span_card' => '',
                'i_class' => 'fa-coffee',
                'similar_rooms_room_services_i_data_content' => 'Breakfast Included',
                'similar_rooms_room_services_i_data_title' => 'Breakfast',
            ],
            [
                'displayed_card' => FALSE,
                'room_service_text' => 'Private Balcony',
                'span_card' => '',
                'i_class' => '',
                'similar_rooms_room_services_i_data_content' => '',
                'similar_rooms_room_services_i_data_title' => '',
            ],
            [
                'displayed_card' => FALSE,
                'room_service_text' => 'Free Newspaper',
                'span_card' => '',
                'i_class' => '',
                'similar_rooms_room_services_i_data_content' => '',
                'similar_rooms_room_services_i_data_title' => '',
            ],
            [
                'displayed_card' => FALSE,
                'room_service_text' => 'Flat Screen Tv',
                'span_card' => '',
                'i_class' => 'fa-television',
                'similar_rooms_room_services_i_data_content' => 'Plasma TV with cable channels',
                'similar_rooms_room_services_i_data_title' => 'TV',
            ],
            [
                'displayed_card' => FALSE,
                'room_service_text' => 'Full Ac',
                'span_card' => '',
                'i_class' => '',
                'similar_rooms_room_services_i_data_content' => '',
                'similar_rooms_room_services_i_data_title' => '',
            ],
            [
                'displayed_card' => FALSE,
                'room_service_text' => 'Beach View',
                'span_card' => '',
                'i_class' => '',
                'similar_rooms_room_services_i_data_content' => '',
                'similar_rooms_room_services_i_data_title' => '',
            ],
            [
                'displayed_card' => FALSE,
                'room_service_text' => 'Room Service',
                'span_card' => '',
                'i_class' => '',
                'similar_rooms_room_services_i_data_content' => '',
                'similar_rooms_room_services_i_data_title' => '',
            ],
        ]);
    }
}
