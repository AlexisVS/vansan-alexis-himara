<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('userImage_img');
            $table->string('rating');
            $table->string('rating_i_class');
            $table->string('review_info');
            $table->string('review_date');
            $table->string('review_location');
            $table->string('review_text');
            $table->foreignId('room_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('room_reviews');
    }
}
