<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('page_title_bg');
            $table->string('page_title_title');
            $table->string('page_title_a_href');
            $table->string('page_title_a_text');
            $table->string('page_title_li');
            $table->string('section_title_title');
            $table->string('section_title_subtitle');
            $table->string('section_title_text');
            $table->string('form_name');
            $table->string('form_email');
            $table->string('form_phone');
            $table->string('form_subject');
            $table->string('form_message');
            $table->string('form_submit');
            $table->string('sidebar_map_i_class');
            $table->string('sidebar_map_canvas_address');
            $table->string('sidebar_info_li1_a_href');
            $table->string('sidebar_info_li1_i_class');
            $table->string('sidebar_info_li1_text');
            $table->string('sidebar_info_li2_a_href');
            $table->string('sidebar_info_li2_i_class');
            $table->string('sidebar_info_li2_text');
            $table->string('sidebar_info_li3_a_href');
            $table->string('sidebar_info_li3_i_class');
            $table->string('sidebar_info_li3_text');
            $table->string('sidebar_info_li4_a_href');
            $table->string('sidebar_info_li4_i_class');
            $table->string('sidebar_info_li4_text');
            $table->string('sidebar_info_li5_a_href');
            $table->string('sidebar_info_li5_i_class');
            $table->string('sidebar_info_li5_text');
            $table->string('sidebar_social_facebook_title');
            $table->string('sidebar_social_facebook_href');
            $table->string('sidebar_social_facebook_i_class');
            $table->string('sidebar_social_twitter_title');
            $table->string('sidebar_social_twitter_href');
            $table->string('sidebar_social_twitter_i_class');
            $table->string('sidebar_social_googleplus_title');
            $table->string('sidebar_social_googleplus_href');
            $table->string('sidebar_social_googleplus_i_class');
            $table->string('sidebar_social_pinterest_title');
            $table->string('sidebar_social_pinterest_href');
            $table->string('sidebar_social_pinterest_i_class');
            $table->string('sidebar_social_linkedin_title');
            $table->string('sidebar_social_linkedin_href');
            $table->string('sidebar_social_linkedin_i_class');
            $table->string('sidebar_social_youtube_title');
            $table->string('sidebar_social_youtube_href');
            $table->string('sidebar_social_youtube_i_class');
            $table->string('sidebar_social_tripadvisor_title');
            $table->string('sidebar_social_tripadvisor_href');
            $table->string('sidebar_social_tripadvisor_i_class');
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
        Schema::dropIfExists('page_contacts');
    }
}
