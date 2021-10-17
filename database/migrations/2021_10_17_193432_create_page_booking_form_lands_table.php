<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageBookingFormLandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_booking_form_lands', function (Blueprint $table) {
            $table->id();
            $table->text('Afganistan');
            $table->text('Albania');
            $table->text('Algeria');
            $table->text('American_Samoa');
            $table->text('Andorra');
            $table->text('Angola');
            $table->text('Anguilla');
            $table->text('Antigua_Barbuda');
            $table->text('Argentina');
            $table->text('Armenia');
            $table->text('Aruba');
            $table->text('Australia');
            $table->text('Austria');
            $table->text('Azerbaijan');
            $table->text('Bahamas');
            $table->text('Bahrain');
            $table->text('Bangladesh');
            $table->text('Barbados');
            $table->text('Belarus');
            $table->text('Belgium');
            $table->text('Belize');
            $table->text('Benin');
            $table->text('Bermuda');
            $table->text('Bhutan');
            $table->text('Bolivia');
            $table->text('Bonaire');
            $table->text('Bosnia_Herzegovina');
            $table->text('Botswana');
            $table->text('Brazil');
            $table->text('British_Indian_Ocean_Ter');
            $table->text('Brunei');
            $table->text('Bulgaria');
            $table->text('Burkina_Faso');
            $table->text('Burundi');
            $table->text('Cambodia');
            $table->text('Cameroon');
            $table->text('Canada');
            $table->text('Canary_Islands');
            $table->text('Cape_Verde');
            $table->text('Cayman_Islands');
            $table->text('Central_African_Republic');
            $table->text('Chad');
            $table->text('Channel_Islands');
            $table->text('Chile');
            $table->text('China');
            $table->text('Christmas_Island');
            $table->text('Cocos_Island');
            $table->text('Colombia');
            $table->text('Comoros');
            $table->text('Congo');
            $table->text('Cook_Islands');
            $table->text('Costa_Rica');
            $table->text('Cote_DIvoire');
            $table->text('Croatia');
            $table->text('Cuba');
            $table->text('Curaco');
            $table->text('Cyprus');
            $table->text('Czech_Republic');
            $table->text('Denmark');
            $table->text('Djibouti');
            $table->text('Dominica');
            $table->text('Dominican_Republic');
            $table->text('East_Timor');
            $table->text('Ecuador');
            $table->text('Egypt');
            $table->text('El_Salvador');
            $table->text('Equatorial_Guinea');
            $table->text('Eritrea');
            $table->text('Estonia');
            $table->text('Ethiopia');
            $table->text('Falkland_Islands');
            $table->text('Faroe_Islands');
            $table->text('Fiji');
            $table->text('Finland');
            $table->text('France');
            $table->text('French_Guiana');
            $table->text('French_Polynesia');
            $table->text('French_Southern_Ter');
            $table->text('Gabon');
            $table->text('Gambia');
            $table->text('Georgia');
            $table->text('Germany');
            $table->text('Ghana');
            $table->text('Gibraltar');
            $table->text('Great_Britain');
            $table->text('Greece');
            $table->text('Greenland');
            $table->text('Grenada');
            $table->text('Guadeloupe');
            $table->text('Guam');
            $table->text('Guatemala');
            $table->text('Guinea');
            $table->text('Guyana');
            $table->text('Haiti');
            $table->text('Hawaii');
            $table->text('Honduras');
            $table->text('Hong_Kong');
            $table->text('Hungary');
            $table->text('Iceland');
            $table->text('India');
            $table->text('Indonesia');
            $table->text('Iran');
            $table->text('Iraq');
            $table->text('Ireland');
            $table->text('Isle_of_Man');
            $table->text('Israel');
            $table->text('Italy');
            $table->text('Jamaica');
            $table->text('Japan');
            $table->text('Jordan');
            $table->text('Kazakhstan');
            $table->text('Kenya');
            $table->text('Kiribati');
            $table->text('Korea_North');
            $table->text('Korea_Sout');
            $table->text('Kuwait');
            $table->text('Kyrgyzstan');
            $table->text('Laos');
            $table->text('Latvia');
            $table->text('Lebanon');
            $table->text('Lesotho');
            $table->text('Liberia');
            $table->text('Libya');
            $table->text('Liechtenstein');
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
        Schema::dropIfExists('page_booking_form_lands');
    }
}
