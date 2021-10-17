<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageHomeContactV2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_home_contact-v2s', function (Blueprint $table) {
            $table->id();
            $table->string('section_title1_h4');
            $table->string('section_title1_p');
            $table->string('contact_details_li1_i_class');
            $table->string('contact_details_li1_text');
            $table->string('contact_details_li2_i_class');
            $table->string('contact_details_li2_text');
            $table->string('contact_details_li3_i_class');
            $table->string('contact_details_li3_text');
            $table->string('contact_details_li4_i_class');
            $table->string('contact_details_li4_text');
            $table->string('contact_details_li5_i_class');
            $table->string('contact_details_li5_text');
            $table->string('contact_details_li5_a_href');
            $table->string('contact_details_li5_a_text');
            $table->string('section_title2_h4');
            $table->string('section_title2_p');
            $table->string('form_input1_placeholder');
            $table->string('form_input2_placeholder');
            $table->string('form_input3_placeholder');
            $table->string('form_submit_i_class');
            $table->string('form_submit_text');
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
        Schema::dropIfExists('page_home_contact-v2s');
    }
}
