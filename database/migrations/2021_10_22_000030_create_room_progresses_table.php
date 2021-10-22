<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomProgressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_progresses', function (Blueprint $table) {
            $table->id();
            $table->string('progress1_start');
            $table->string('progress1_value');
            $table->string('progress2_start');
            $table->string('progress2_value');
            $table->string('progress3_start');
            $table->string('progress3_value');
            $table->string('progress4_start');
            $table->string('progress4_value');
            $table->string('progress5_start');
            $table->string('progress5_value');
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
        Schema::dropIfExists('room_progresses');
    }
}
