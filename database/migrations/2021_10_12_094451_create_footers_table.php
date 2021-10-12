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
            $table->string('w1-logo');
            $table->string('w1-inner-text');
            $table->string('w1-a-href');
            $table->string('w1-a-span');
            $table->string('w1-a-img');
            $table->string('w2-h3');
            $table->string('w3-h3');
            $table->string('w3-a1-href');
            $table->string('w3-a1-text');
            $table->string('w3-a2-href');
            $table->string('w3-a2-text');
            $table->string('w3-a3-href');
            $table->string('w3-a3-text');
            $table->string('w3-a4-href');
            $table->string('w3-a4-text');
            $table->string('w3-a5-href');
            $table->string('w3-a5-text');
            $table->string('w4-h3');
            $table->string('w4-li1-i-class');
            $table->string('w4-li1-text');
            $table->string('w4-li2-i-class');
            $table->string('w4-li2-text');
            $table->string('w4-li3-i-class');
            $table->string('w4-li3-text');
            $table->string('w4-li4-i-class');
            $table->string('w4-li4-text');
            $table->string('w4-li5-i-class');
            $table->string('w4-li5-li-text');
            $table->string('w4-li5-text');
            $table->string('sf-copyright');
            $table->string('sf-copyright-href');
            $table->string('sf-copyright-text');
            $table->string('sf-sm-facebook-href');
            $table->string('sf-sm-facebook-text');
            $table->string('sf-sm-twitter-href');
            $table->string('sf-sm-twitter-text');
            $table->string('sf-sm-googleplus-href');
            $table->string('sf-sm-googleplus-text');
            $table->string('sf-sm-pinterest-href');
            $table->string('sf-sm-pinterest-text');
            $table->string('sf-sm-linkedin-href');
            $table->string('sf-sm-linkedin-text');
            $table->string('sf-sm-youtube-href');
            $table->string('sf-sm-youtube-text');
            $table->string('sf-sm-instagram-href');
            $table->string('sf-sm-instagram-text');
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
