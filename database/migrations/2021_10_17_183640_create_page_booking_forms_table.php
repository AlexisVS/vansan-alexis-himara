<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageBookingFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_booking_forms', function (Blueprint $table) {
            $table->id();
            $table->string('page_title_bg');
            $table->string('page_title_title');
            $table->string('page_title_a_href');
            $table->string('page_title_a_text');
            $table->string('page_title_text');
            $table->string('section_title_title');
            $table->string('section_title_subtitle');
            $table->text('section_title_text');
            $table->string('section_title_not_connected');
            $table->string('section_title_not_connected_link_href');
            $table->string('section_title_not_connected_link_text');
            $table->string('section_title_not_connected_link2_href');
            $table->string('section_title_not_connected_link2_text');
            $table->string('form_name_text');
            $table->string('form_name_placeholder');
            $table->string('form_email_text');
            $table->string('form_email_placeholder');
            $table->string('form_phone_text');
            $table->string('form_phone_placeholder');
            $table->string('select_label');
            $table->string('select_title');
            $table->string('select_data_header');
            $table->string('form_check_text');
            $table->string('form_check_title');
            $table->string('form_check_data_content');
            $table->string('form_check_i_class');
            $table->string('guest_text');
            $table->string('guest_title');
            $table->string('guest_data_content');
            $table->string('guest_i_class');
            $table->string('dropdown_text');
            $table->string('dropdown_adult_text');
            $table->string('dropdown_adult_data_content');
            $table->string('dropdown_adult_i_class');
            $table->string('dropdown_children_text');
            $table->string('dropdown_children_data_content');
            $table->string('dropdown_children_i_class');
            $table->string('room_type_title');
            $table->string('room_type_select_title');
            $table->string('room_type_select_data_header');
            $table->string('room_name_title');
            $table->string('room_name_select_title');
            $table->string('room_name_select_data_header');
            $table->string('comment_title');
            $table->string('comment_placeholder');
            $table->string('submit_i_class');
            $table->string('submit_text');
            $table->string('sidebar_title');
            $table->string('sidebar_subtitle');
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
        Schema::dropIfExists('page_booking_forms');
    }
}
