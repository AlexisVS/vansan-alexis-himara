<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageBookingFormLand2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_booking_form_land2s', function (Blueprint $table) {
            $table->id();

            $table->text('Lithuania');
            $table->text('Luxembourg');
            $table->text('Macau');
            $table->text('Macedonia');
            $table->text('Madagascar');
            $table->text('Malaysia');
            $table->text('Malawi');
            $table->text('Maldives');
            $table->text('Mali');
            $table->text('Malta');
            $table->text('Marshall_Islands');
            $table->text('Martinique');
            $table->text('Mauritania');
            $table->text('Mauritius');
            $table->text('Mayotte');
            $table->text('Mexico');
            $table->text('Midway_Islands');
            $table->text('Moldova');
            $table->text('Monaco');
            $table->text('Mongolia');
            $table->text('Montserrat');
            $table->text('Morocco');
            $table->text('Mozambique');
            $table->text('Myanmar');
            $table->text('Nambia');
            $table->text('Nauru');
            $table->text('Nepal');
            $table->text('Netherland_Antilles');
            $table->text('Netherlands');
            $table->text('Nevis');
            $table->text('New_Caledonia');
            $table->text('New_Zealand');
            $table->text('Nicaragua');
            $table->text('Niger');
            $table->text('Nigeria');
            $table->text('Niue');
            $table->text('Norfolk_Island');
            $table->text('Norway');
            $table->text('Oman');
            $table->text('Pakistan');
            $table->text('Palau_Island');
            $table->text('Palestine');
            $table->text('Panama');
            $table->text('Papua_New_Guinea');
            $table->text('Paraguay');
            $table->text('Peru');
            $table->text('Phillipines');
            $table->text('Pitcairn_Island');
            $table->text('Poland');
            $table->text('Portugal');
            $table->text('Puerto_Rico');
            $table->text('Qatar');
            $table->text('Republic_of_Montenegro');
            $table->text('Republic_of_Serbia');
            $table->text('Reunion');
            $table->text('Romania');
            $table->text('Russia');
            $table->text('Rwanda');
            $table->text('St_Barthelemy');
            $table->text('St_Eustatius');
            $table->text('St_Helena');
            $table->text('St_Kitts_Nevis');
            $table->text('St_Lucia');
            $table->text('St_Maarten');
            $table->text('St_Pierre_Miquelon');
            $table->text('St_Vincent_Grenadines');
            $table->text('Saipan');
            $table->text('Samoa');
            $table->text('Samoa_American');
            $table->text('San_Marino');
            $table->text('Sao_Tome_Principe');
            $table->text('Saudi_Arabia');
            $table->text('Senegal');
            $table->text('Serbia');
            $table->text('Seychelles');
            $table->text('Sierra_Leone');
            $table->text('Singapore');
            $table->text('Slovakia');
            $table->text('Slovenia');
            $table->text('Solomon_Islands');
            $table->text('Somalia');
            $table->text('South_Africa');
            $table->text('Spain');
            $table->text('Sri_Lanka');
            $table->text('Sudan');
            $table->text('Suriname');
            $table->text('Swaziland');
            $table->text('Sweden');
            $table->text('Switzerland');
            $table->text('Syria');
            $table->text('Tahiti');
            $table->text('Taiwan');
            $table->text('Tajikistan');
            $table->text('Tanzania');
            $table->text('Thailand');
            $table->text('Togo');
            $table->text('Tokelau');
            $table->text('Tonga');
            $table->text('Trinidad_Tobago');
            $table->text('Tunisia');
            $table->text('Turkey');
            $table->text('Turkmenistan');
            $table->text('Turks_Caicos_Is');
            $table->text('Tuvalu');
            $table->text('Uganda');
            $table->text('Ukraine');
            $table->text('United_Arab_Erimates');
            $table->text('United_Kingdom');
            $table->text('United_States_of_America');
            $table->text('Uraguay');
            $table->text('Uzbekistan');
            $table->text('Vanuatu');
            $table->text('Vatican_City_State');
            $table->text('Venezuela');
            $table->text('Vietnam');
            $table->text('Virgin_Islands_Brit');
            $table->text('Virgin_Islands_USA');
            $table->text('Wake_Island');
            $table->text('Wallis_Futana_Is');
            $table->text('Yemen');
            $table->text('Zaire');
            $table->text('Zambia');
            $table->text('Zimbabwe');
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
        Schema::dropIfExists('page_booking_form_land2s');
    }
}
