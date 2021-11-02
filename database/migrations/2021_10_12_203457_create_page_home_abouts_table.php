<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageHomeAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_home_abouts', function (Blueprint $table) {
            $table->id();
            $table->string('section_title_title');
            $table->string('section_title_title2');
            $table->string('section_title_section_subtitle');
            $table->text('info_branding_p');
            $table->string('providers_text');
            $table->string('content_img');
            $table->string('content_star_i_class');
            $table->string('content_title');
            $table->string('content_text');
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
        Schema::dropIfExists('page_home_abouts');
    }
}
