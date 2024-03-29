<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageBlogSidebarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_blog_sidebars', function (Blueprint $table) {
            $table->id();
            $table->string('search_placeholder');
            $table->string('search_btn_i_class');
            $table->string('categories_title');
            $table->string('latest_posts_title');
            $table->string('tags_title');
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
        Schema::dropIfExists('page_blog_sidebars');
    }
}
