<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageEventdetailsTableBodiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_eventdetails_table_bodies', function (Blueprint $table) {
            $table->id();
            $table->string('text1');
            $table->string('text2');
            $table->string('text3');
            $table->string('text4');
            $table->string('text5');
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
        Schema::dropIfExists('page_eventdetails_table_bodies');
    }
}
