<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayoutFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layout_footers', function (Blueprint $table) {
            $table->id();
            $table->string('w1_logo');
            $table->string('w1_inner_text');
            $table->string('w1_a_href');
            $table->string('w1_a_span');
            $table->string('w1_a_img');
            $table->string('w2_h3');
            $table->string('w3_h3');
            $table->string('w3_a1_href');
            $table->string('w3_a1_text');
            $table->string('w3_a2_href');
            $table->string('w3_a2_text');
            $table->string('w3_a3_href');
            $table->string('w3_a3_text');
            $table->string('w3_a4_href');
            $table->string('w3_a4_text');
            $table->string('w3_a5_href');
            $table->string('w3_a5_text');
            $table->string('w4_h3');
            $table->string('w4_li1_i_class');
            $table->string('w4_li1_text');
            $table->string('w4_li2_i_class');
            $table->string('w4_li2_text');
            $table->string('w4_li3_i_class');
            $table->string('w4_li3_text');
            $table->string('w4_li4_i_class');
            $table->string('w4_li4_text');
            $table->string('w4_li5_i_class');
            $table->string('w4_li5_text');
            $table->string('w4_li5_li_text');
            $table->string('w4_li5_a_text');
            $table->string('sf_copyright');
            $table->string('sf_copyright_href');
            $table->string('sf_copyright_text');
            $table->string('sf_sm_facebook_class');
            $table->string('sf_sm_facebook_title');
            $table->string('sf_sm_facebook_href');
            $table->string('sf_sm_facebook_i_class');
            $table->string('sf_sm_twitter_class');
            $table->string('sf_sm_twitter_title');
            $table->string('sf_sm_twitter_href');
            $table->string('sf_sm_twitter_i_class');
            $table->string('sf_sm_googleplus_class');
            $table->string('sf_sm_googleplus_title');
            $table->string('sf_sm_googleplus_href');
            $table->string('sf_sm_googleplus_i_class');
            $table->string('sf_sm_pinterest_class');
            $table->string('sf_sm_pinterest_title');
            $table->string('sf_sm_pinterest_href');
            $table->string('sf_sm_pinterest_i_class');
            $table->string('sf_sm_linkedin_class');
            $table->string('sf_sm_linkedin_title');
            $table->string('sf_sm_linkedin_href');
            $table->string('sf_sm_linkedin_i_class');
            $table->string('sf_sm_youtube_class');
            $table->string('sf_sm_youtube_title');
            $table->string('sf_sm_youtube_href');
            $table->string('sf_sm_youtube_i_class');
            $table->string('sf_sm_instagram_class');
            $table->string('sf_sm_instagram_title');
            $table->string('sf_sm_instagram_href');
            $table->string('sf_sm_instagram_i_class');
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
        Schema::dropIfExists('layout_footers');
    }
}
