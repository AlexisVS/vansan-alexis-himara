<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageGalleryGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_gallery_galleries', function (Blueprint $table) {
            $table->id();
            $table->string('class_filter');
            $table->string('a_href');
            $table->string('img');
            $table->string('figcaption');
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
        Schema::dropIfExists('page_gallery_galleries');
    }
}
