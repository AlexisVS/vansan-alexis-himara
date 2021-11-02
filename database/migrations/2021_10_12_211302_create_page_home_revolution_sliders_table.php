<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageHomeRevolutionSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_home_revolution_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('mainImage_img');
            $table->string('layer1_text');
            $table->string('layer2_text');
            $table->string('layer3_href');
            $table->string('layer3_i_class');
            $table->string('layer3_text');
            $table->string('layer4_href');
            $table->string('layer4_i_class');
            $table->string('layer4_text');
            $table->string('layer5_i_class');
            $table->string('layer6_text');
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
        Schema::dropIfExists('page_home_revolution-sliders');
    }
}
