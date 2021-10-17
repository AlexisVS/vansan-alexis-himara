<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageEventdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_eventdetails', function (Blueprint $table) {
            $table->id();
            $table->string('revolution_slider_img');
            $table->string('revolution_slider_text');
            $table->string('revolution_slider_countdown_year');
            $table->string('revolution_slider_countdown_month');
            $table->string('revolution_slider_countdown_days');
            $table->string('booking_form_title');
            $table->string('booking_form_email_placeholder');
            $table->string('booking_form_email_title');
            $table->string('booking_form_email_data_header');
            $table->string('booking_form_email_option_value');
            $table->string('booking_form_email_option_text');
            $table->string('booking_form_guests_guestpicker');
            $table->string('booking_form_guests_adult_label');
            $table->string('booking_form_guests_adult_data_content');
            $table->string('booking_form_guests_adult_i_class');
            $table->string('booking_form_guests_children_label');
            $table->string('booking_form_guests_children_data_content');
            $table->string('booking_form_guests_children_i_class');
            $table->string('booking_form_guests_submit_text');
            $table->text('text1');
            $table->text('text2');
            $table->text('text3');
            $table->text('text4');
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
        Schema::dropIfExists('page_eventdetails');
    }
}
