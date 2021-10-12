<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headers', function (Blueprint $table) {
            $table->id();
            $table->string('brand-href');
            $table->string('brand-img');
            $table->string('menu-li1-href');
            $table->string('menu-li1-text');
            $table->string('menu-li2-href');
            $table->string('menu-li2-text');
            $table->string('menu-li3-href');
            $table->string('menu-li3-text');
            $table->string('menu-li4-href');
            $table->string('menu-li4-text');
            $table->string('menu-li5-href');
            $table->string('menu-li5-text');
            $table->string('menu-li6a-href');
            $table->string('menu-li6a-class');
            $table->string('menu-li6a-text');
            $table->string('menu-li6b-href');
            $table->string('menu-li6b-class');
            $table->string('menu-li6b-text');
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
        Schema::dropIfExists('headers');
    }
}
