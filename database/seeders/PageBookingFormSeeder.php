<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageBookingFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_booking_forms')->insert([
            'page_title_bg' => 'breadcrumb.jpg',
            'page_title_title' => 'Booking Form',
            'page_title_a_href' => '/',
            'page_title_a_text' => 'Home',
            'page_title_text' => 'Booking Form',
            'section_title_title' => 'BOOK YOUR STAY',
            'section_title_subtitle' => 'Book your Room Now',
            'section_title_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia deleniti fuga recusandae perferendis modi voluptate, ad ratione saepe voluptas nam provident reiciendis velit nulla repellendus illo consequuntur amet similique hic.',
            'form_name_text' => 'Your Name',
            'form_name_placeholder' => 'Your Name',
            'form_email_text' => 'Email Address',
            'form_email_placeholder' => 'Your Email Address',
            'form_phone_text' => 'Phone Number',
            'form_phone_placeholder' => 'Your Phone Number',
            'select_label' => 'Country',
            'select_title' => 'Select Your Country',
            'select_data_header' => 'Select Your Country',
            'form_check_text' => 'CHECK-IN/OUT',
            'form_check_title' => 'Check-In / Check-Out',
            'form_check_data_content' => 'Please select check-in and check-out date <br>*Check In from 11:00am',
            'form_check_i_class' => 'fa-info-circle',
            'guest_text' => 'Guests',
            'guest_title' => 'Guests',
            'guest_data_content' => 'Please Select Adults / Children',
            'guest_i_class' => 'fa-info-circle',
            'dropdown_text' => 'Guests',
            'dropdown_adult_text' => 'Adults',
            'dropdown_adult_data_content' => '18+ years',
            'dropdown_adult_i_class' => 'fa-info-circle',
            'dropdown_children_text' => 'Children',
            'dropdown_children_data_content' => 'Under 18 years',
            'dropdown_children_i_class' => 'fa-info-circle',
            'room_type_title' => 'Room Type',
            'room_type_select_title' => 'Select Room Type',
            'room_type_select_data_header' => 'Select Room Type',
            'comment_title' => 'Your Comments',
            'comment_placeholder' => 'Your Comments...',
            'submit_i_class' => 'fa-calendar-check-o',
            'submit_text' => 'BOOK A ROOM NOW',
            'sidebar_title' => 'OFFERS',
            'sidebar_subtitle' => 'CHECK OUT OUR SPECIAL OFFERS',
        ]);
    }
}