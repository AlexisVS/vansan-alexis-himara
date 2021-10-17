<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
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
            $table->string('w4_li5_li_text');
            $table->string('w4_li5_text');
            $table->string('sf_copyright');
            $table->string('sf_copyright_href');
            $table->string('sf_copyright_text');
            $table->string('sf_sm_facebook_href');
            $table->string('sf_sm_facebook_text');
            $table->string('sf_sm_twitter_href');
            $table->string('sf_sm_twitter_text');
            $table->string('sf_sm_googleplus_href');
            $table->string('sf_sm_googleplus_text');
            $table->string('sf_sm_pinterest_href');
            $table->string('sf_sm_pinterest_text');
            $table->string('sf_sm_linkedin_href');
            $table->string('sf_sm_linkedin_text');
            $table->string('sf_sm_youtube_href');
            $table->string('sf_sm_youtube_text');
            $table->string('sf_sm_instagram_href');
            $table->string('sf_sm_instagram_text');
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
        Schema::dropIfExists('footers');
    }
}
