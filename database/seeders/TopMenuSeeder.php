<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('top-menus')->insert([
            'welcome_mssg' => 'Welcome to Hotel Himara.',
            'a_tel_href' => 'tel:+18881234567',
            'a_tel_i_class' => 'fa-phone',
            'a_tel_text' => '+1 888 123 4567',
            'a_mail_href' => 'mailto:contact@hotelhimara.com',
            'a_mail_i_class' => 'fa-envelope-o',
            'a_mail_text' => 'contact@hotelhimara.com',
            'flag_active' => 'gb.png',
            'flag_it' => 'it.png',
            'flag_gr' => 'gr.png',
            'flag_al' => 'al.png',
            'flag_fr' => 'fr.png',
            'flag_es' => 'es.png'
        ]);
    }
}
