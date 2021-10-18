<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_pages', function (Blueprint $table) {
            $table->id();
            $table->string('page_title_bg');
            $table->string('page_title_title');
            $table->string('page_title_a_href');
            $table->string('page_title_text');
            $table->string('page_title_li');
            $table->text('text1');
            $table->text('text2');
            $table->text('text3');
            $table->string('sidebar_search_placeholder');
            $table->string('sidebar_i_class');
            $table->string('sidebar_widget1_name');
            $table->string('sidebar_widget2_name');
            $table->string('sidebar_widget3_name');
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
        Schema::dropIfExists('page_pages');
    }
}
