<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageHomeOurRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_home_our_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('section_title_title');
            $table->string('section_title_title_span');
            $table->string('section_title_subtitle');
            $table->string('section_title_a_href');
            $table->string('section_title_a_text');
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
        Schema::dropIfExists('page_home_our-rooms');
    }
}
