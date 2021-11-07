<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageBookingFormOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_booking_form_offers', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('ribbon');
            $table->string('offer_price');
            $table->string('offer_title');
            $table->string('room_id')->nullable();
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
        Schema::dropIfExists('page_booking_form_offers');
    }
}
