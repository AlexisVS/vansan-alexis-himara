<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageEventdetailsTableHeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_eventdetails_table_heads', function (Blueprint $table) {
            $table->id();
            $table->string('head1');
            $table->string('head2');
            $table->string('head3');
            $table->string('head4');
            $table->string('head5');
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
        Schema::dropIfExists('page_eventdetails_table_heads');
    }
}
