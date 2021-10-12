<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageHomeOurRoomsRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_home_our-rooms_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('fig_link');
            $table->string('fig_link_img');
            $table->string('fig_icon1');
            $table->string('fig_icon2');
            $table->string('fig_icon3');
            $table->string('fig_icon4');
            $table->string('fig_room-price');
            $table->string('room_title_href');
            $table->string('room_title_text');
            $table->string('text');
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
        Schema::dropIfExists('page_home_our-rooms_rooms');
    }
}
