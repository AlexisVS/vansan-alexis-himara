<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageHomeOurRoomsRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_home_our_rooms_rooms')->insert([
            [
                'fig_link' => '/room',
                'fig_link_img' => 'single1.jpg',
                'fig_icon1' => 'fa-coffee',
                'fig_icon2' => 'fa-wifi',
                'fig_icon3' => 'fa-television',
                'fig_icon4' => '',
                'fig_room_price' => '€89 / night',
                'room_title_href' => '/room',
                'room_title_text' => 'Single Room',
                'text' => 'Enjoy our single room'
            ],
            [
                'fig_link' => '/room',
                'fig_link_img' => 'double.jpg',
                'fig_icon1' => 'fa-coffee',
                'fig_icon2' => 'fa-wifi',
                'fig_icon3' => 'fa-television',
                'fig_icon4' => '',
                'fig_room_price' => '€129 / night',
                'room_title_href' => '/room',
                'room_title_text' => 'Double Room',
                'text' => 'Enjoy our double room'
            ],
            [
                'fig_link' => '/room',
                'fig_link_img' => 'deluxe.jpg',
                'fig_icon1' => 'fa-coffee',
                'fig_icon2' => 'fa-bath',
                'fig_icon3' => 'fa-wifi',
                'fig_icon4' => 'fa-television',
                'fig_room_price' => '€189 / night',
                'room_title_href' => '/room',
                'room_title_text' => 'Deluxe Room',
                'text' => 'Enjoy our delux room'
            ],
        ]);
    }
}
