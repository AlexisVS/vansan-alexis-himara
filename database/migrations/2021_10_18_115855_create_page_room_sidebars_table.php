<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageRoomSidebarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_room_sidebars', function (Blueprint $table) {
            $table->id();
            $table->string('sidebar_title');
            $table->string('sidebar_form_email_placeholder');
            $table->string('sidebar_form_roomtype_title');
            $table->string('sidebar_form_roomtype_data_header');
            $table->string('sidebar_form_date_placeholder');
            $table->string('sidebar_form_guestspicker');
            $table->string('sidebar_form_label1');
            $table->string('sidebar_form_label1_data_content');
            $table->string('sidebar_form_label1_data_title');
            $table->string('sidebar_form_label1_i_class');
            $table->string('sidebar_form_label2');
            $table->string('sidebar_form_label2_data_content');
            $table->string('sidebar_form_label2_data_title');
            $table->string('sidebar_form_label2_i_class');
            $table->string('sidebar_form_submit');
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
        Schema::dropIfExists('page_room_sidebars');
    }
}
