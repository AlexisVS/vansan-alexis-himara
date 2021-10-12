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
        Schema::create('page_home_revolution-sliders', function (Blueprint $table) {
            $table->id();
            $table->string('mainImage');
            $table->string('layer1-text');
            $table->string('layer2-text');
            $table->string('layer3-href');
            $table->string('layer3-i-class');
            $table->string('layer3-text');
            $table->string('layer4-href');
            $table->string('layer4-i-class');
            $table->string('layer4-text');
            $table->string('layer5-i-class');
            $table->string('layer6-text');
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
