<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_galleries', function (Blueprint $table) {
            $table->id();
            $table->string('page_title_bg_img');
            $table->string('page_title_title');
            $table->string('page_title_a_href');
            $table->string('page_title_a_text');
            $table->string('page_title_li');
            $table->string('gallery_filter1_data_filter');
            $table->string('gallery_filter1_text');
            $table->string('gallery_filter2_data_filter');
            $table->string('gallery_filter2_text');
            $table->string('gallery_filter3_data_filter');
            $table->string('gallery_filter3_text');
            $table->string('gallery_filter4_data_filter');
            $table->string('gallery_filter4_text');
            $table->string('gallery_filter5_data_filter');
            $table->string('gallery_filter5_text');
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
        Schema::dropIfExists('page_galleries');
    }
}
