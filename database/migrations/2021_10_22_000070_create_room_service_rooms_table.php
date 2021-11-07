<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomServiceRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_service_rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_service_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('room_id')->constrained()->onDelete('cascade');
            $table->boolean('available');
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
        Schema::dropIfExists('room_service_rooms');
    }
}
