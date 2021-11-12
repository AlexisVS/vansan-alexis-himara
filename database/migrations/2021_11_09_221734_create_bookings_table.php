<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('date');
            $table->string('adults');
            $table->string('children');
            $table->string('room');
            $table->text('comments');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->boolean('approvement')->nullable();
            $table->foreignId('user_id');

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
        Schema::dropIfExists('bookings');
    }
}
