<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_blog_posts', function (Blueprint $table) {
            $table->id();
            $table->string('figure_img');
            $table->string('post_title_text');
            $table->string('post_meta_img');
            $table->string('post_meta_text');
            $table->string('date_i_class');
            $table->string('date_text');
            $table->string('comments_i_class');
            $table->string('comments_text');
            $table->string('category_i_class');
            $table->string('category_text');
            $table->string('category_a1_text');
            $table->string('category_a2_text');
            $table->string('post_details_text');
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
        Schema::dropIfExists('page_blog_posts');
    }
}
