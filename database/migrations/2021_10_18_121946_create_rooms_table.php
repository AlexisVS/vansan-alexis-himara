<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->text('dropcap_before');
            $table->text('dropcap_u');
            $table->text('dropcap_after');
            $table->text('text1');
            $table->text('text2_before');
            $table->text('text2_u');
            $table->text('text2_after');
            $table->text('text3_before');
            $table->text('text3_u');
            $table->text('text3_after');
            $table->string('rating');
            $table->string('rating_i_class');
            $table->string('rating_text');
            $table->string('price');
            $table->string('name');
            $table->string('slogan');
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
        Schema::dropIfExists('rooms');
    }
}
