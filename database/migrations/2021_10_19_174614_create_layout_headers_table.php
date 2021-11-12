<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayoutHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layout_headers', function (Blueprint $table) {
            $table->id();
            $table->string('brand_href');
            $table->string('menu_li1_href');
            $table->string('menu_li1_text');
            $table->string('menu_li2_href');
            $table->string('menu_li2_text');
            $table->string('menu_li3_href');
            $table->string('menu_li3_text');
            $table->string('menu_li4_href');
            $table->string('menu_li4_text');
            $table->string('menu_li5_href');
            $table->string('menu_li5_text');
            $table->string('menu_li6a_href');
            $table->string('menu_li6a_i_class');
            $table->string('menu_li6a_text');
            $table->string('menu_li6b_href');
            $table->string('menu_li6b_i_class');
            $table->string('menu_li6b_text');
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
        Schema::dropIfExists('layout_headers');
    }
}
