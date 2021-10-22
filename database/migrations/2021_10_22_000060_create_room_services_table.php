<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_services', function (Blueprint $table) {
            $table->id();
            $table->boolean('displayed_card');
            $table->string('span_card');
            $table->boolean('active');
            $table->string('name1');
            $table->string('name2');
            $table->string('value1');
            $table->string('value2');
            $table->string('i_class');
            $table->string('similar_rooms_room_services_i_data_content');
            $table->string('similar_rooms_room_services_i_data_title');
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
        Schema::dropIfExists('room_services');
    }
}
