<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageHomeTestimonialTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_home_testimonial_testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('author_name');
            $table->string('author_location');
            $table->string('rating');
            $table->string('rating_i_class');
            $table->string('text');
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
        Schema::dropIfExists('page_home_testimonial_testimonials');
    }
}
