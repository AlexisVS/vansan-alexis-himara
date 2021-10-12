<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('top-menus', function (Blueprint $table) {
            $table->id();
            $table->string('welcome-mssg');
            $table->string('a-tel-href');
            $table->string('a-tel-i-class');
            $table->string('a-tel-text');
            $table->string('a-mail-href');
            $table->string('a-mail-i-class');
            $table->string('a-mail-text');
            $table->string('flag-active');
            $table->string('flag-it');
            $table->string('flag-gr');
            $table->string('flag-al');
            $table->string('flag-fr');
            $table->string('flag-es');
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
        Schema::dropIfExists('top-menus');
    }
}
