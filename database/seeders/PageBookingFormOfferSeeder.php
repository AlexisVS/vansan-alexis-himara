<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageBookingFormOfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_booking_form_offers')->insert([
            [
                'img' => 'offer1.jpg',
                'ribbon' => 'HOT OFFER',
                'offer_price' => '5 nights for €1,875',
                'offer_title' => 'All-Inclusive Honeymoon Package'
            ],
            [
                'img' => 'offer2.jpg',
                'ribbon' => 'HOT OFFER',
                'offer_price' => '8 nights for €2,000',
                'offer_title' => 'All-Inclusive Family Package'
            ],
            [
                'img' => 'offer3.jpg',
                'ribbon' => 'HOT OFFER',
                'offer_price' => '3 nights for €268',
                'offer_title' => 'Fly, Stay and Save Over 30%'
            ],
        ]);
    }
}
