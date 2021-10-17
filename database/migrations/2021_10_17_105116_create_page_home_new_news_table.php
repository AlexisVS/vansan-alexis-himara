<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageHomeNewNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_home_new_news', function (Blueprint $table) {
            $table->id();
            $table->string('figure_link_href');
            $table->string('figure_link_img');
            $table->string('title_href');
            $table->string('title_text');
            $table->string('text');
            $table->string('author_href');
            $table->string('author_img');
            $table->string('author_text');
            $table->string('date_i_class');
            $table->string('date_text');
            $table->string('comments_href');
            $table->string('comments_i_class');
            $table->string('comments_text');
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
        Schema::dropIfExists('page_home_new_news');
    }
}
