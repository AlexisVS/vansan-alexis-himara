<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('section_title');
            $table->string('reviews_title');
            $table->string('reviews_subtitle');
            $table->string('service_list_i_class_accepted');
            $table->string('service_list_i_class_refused');
            $table->string('similar_rooms_title');
            $table->string('similar_rooms_subtitle');
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
        Schema::dropIfExists('page_rooms');
    }
}
