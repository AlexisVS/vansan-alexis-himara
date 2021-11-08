<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageHomeGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_home_galleries', function (Blueprint $table) {
            $table->id();
            $table->string('section_title_h4')->nullable();
            $table->string('section_title_span')->nullable();
            $table->string('section_title_h4_after')->nullable();
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
        Schema::dropIfExists('page_home_galleries');
    }
}
