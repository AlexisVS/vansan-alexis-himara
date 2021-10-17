<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageHomeServicesServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_home_services_services', function (Blueprint $table) {
            $table->id();
            $table->string('fig_img');
            $table->string('fig_title');
            $table->string('slider_i_class');
            $table->string('slider_title');
            $table->string('slider_text');
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
        Schema::dropIfExists('page_home_services_services');
    }
}
