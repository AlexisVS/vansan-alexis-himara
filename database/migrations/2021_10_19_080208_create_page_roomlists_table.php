<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageRoomlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_roomlists', function (Blueprint $table) {
            $table->id();
            $table->string('page_title_bg');
            $table->string('page_title_title');
            $table->string('page_title_a_href');
            $table->string('page_title_a_text');
            $table->string('page_title_li');
            $table->string('room_list_room_price_price');
            $table->string('room_list_room_price_a_text1');
            $table->string('room_list_room_price_a_text2');
            $table->string('sidebar_search_placeholder');
            $table->string('sidebar_search_i_class');
            $table->string('sidebar_widget1_title');
            $table->string('sidebar_widget2_title');
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
        Schema::dropIfExists('page_roomlists');
    }
}
