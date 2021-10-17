<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageHomeBookingFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_home_booking-forms', function (Blueprint $table) {
            $table->id();
            $table->string('name_text');
            $table->string('name_a_title');
            $table->string('name_a_data_content');
            $table->string('name_i_class');
            $table->string('name_input_placeholder');
            $table->string('email_text');
            $table->string('email_a_title');
            $table->string('email_a_data_content');
            $table->string('email_i_class');
            $table->string('email_input_placeholder');
            $table->string('roomtype_text');
            $table->string('roomtype_a_title');
            $table->string('roomtype_a_data_content');
            $table->string('roomtype_i_class');
            $table->string('roomtype_select_title');
            $table->string('roomtype_select_option1_value');
            $table->string('roomtype_select_option1_text');
            $table->string('roomtype_select_option2_value');
            $table->string('roomtype_select_option2_text');
            $table->string('roomtype_select_option3_value');
            $table->string('roomtype_select_option3_text');
            $table->string('date_text');
            $table->string('date_a_title');
            $table->string('date_a_data_content');
            $table->string('date_i_class');
            $table->string('date_input_placeholder');
            $table->string('guest_text');
            $table->string('guest_a_title');
            $table->string('guest_a_data_content');
            $table->string('guest_i_class');
            $table->string('guest_guestpicker');
            $table->string('guest_adult_a_data_content');
            $table->string('guest_adult_a_i_class');
            $table->string('guest_children_a_data_content');
            $table->string('guest_children_a_i_class');
            $table->string('guest_submit_text');
            $table->string('guest_submit_a_href');
            $table->string('guest_submit_a_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_home_booking-forms');
    }
}
