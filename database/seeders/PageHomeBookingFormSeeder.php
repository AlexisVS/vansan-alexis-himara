<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageHomeBookingFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_home_booking_forms')->insert([
            'name_text' => 'Name',
            'name_a_title' => 'Your Name',
            'name_a_data_content' => 'Please type your first name and last name',
            'name_i_class' => 'fa-info-circle',
            'name_input_placeholder' => 'Write Your Name',
            'email_text' => 'Email',
            'email_a_title' => 'Your Email',
            'email_a_data_content' => 'Please type your email adress',    
            'email_i_class' => 'fa-info-circle',
            'email_input_placeholder' => 'Write your Email',
            'roomtype_text' => 'Room Type',
            'roomtype_a_title' => 'Room Type',
            'roomtype_a_data_content' => 'Please select room type',
            'roomtype_i_class' => 'fa-info-circle',
            'roomtype_select_title' => 'Select Room Type',
            'date_text' => 'Check-In/Out',
            'date_a_title' => 'Check-In / Check-Out',
            'date_a_data_content' => 'Please select check-in and check-out date <br>*Check In from 11:00am', 
            'date_i_class' => 'fa-info-circle',
            'date_input_placeholder' => 'Arrival & Departure',
            'guest_text' => 'Guests',
            'guest_a_title' => 'Guests',
            'guest_a_data_content' => 'Please Select Adults / Children',
            'guest_i_class' => 'fa-info-circle',
            'guest_guestpicker' => 'Guests',
            'guest_adult_text' => 'Adults',
            'guest_adult_a_data_content' => '18+ years',
            'guest_adult_a_i_class' => 'fa-info-circle',
            'guest_children_text' => 'Children',
            'guest_children_a_data_content' => 'Under 18 years',
            'guest_children_a_i_class' => 'fa-info-circle',
            'guest_submit_text' => 'BOOK A ROOM',
            'guest_submit_a_href' => '/booking-form',
            'guest_submit_a_text' => 'Advanced Booking Form',
        ]);
    }
}