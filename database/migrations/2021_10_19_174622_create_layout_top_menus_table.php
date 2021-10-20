<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayoutTopMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layout_top_menus', function (Blueprint $table) {
            $table->id();
            $table->string('welcome_mssg');
            $table->string('a_tel_href');
            $table->string('a_tel_i_class');
            $table->string('a_tel_text');
            $table->string('a_mail_href');
            $table->string('a_mail_i_class');
            $table->string('a_mail_text');
            $table->string('flag_active');
            $table->string('flag_active_text');
            $table->string('flag_it');
            $table->string('flag_it_text');
            $table->string('flag_gr');
            $table->string('flag_gr_text');
            $table->string('flag_al');
            $table->string('flag_al_text');
            $table->string('flag_fr');
            $table->string('flag_fr_text');
            $table->string('flag_es');
            $table->string('flag_es_text');
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
        Schema::dropIfExists('layout_top_menus');
    }
}
