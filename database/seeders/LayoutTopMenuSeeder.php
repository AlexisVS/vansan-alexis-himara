<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayoutTopMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('layout_top_menus')->insert([
            'welcome_mssg' => 'Welcome to Hotel Himara.',
            'a_tel_href' => 'tel:+18881234567',
            'a_tel_i_class' => 'fa-phone',
            'a_tel_text' => '+1 888 123 4567',
            'a_mail_href' => 'mailto:contact@hotelhimara.com',
            'a_mail_i_class' => 'fa-envelope-o',
            'a_mail_text' => 'contact@hotelhimara.com',
            'flag_active' => 'gb.png',
            'flag_active_text' => 'English',
            'flag_it' => 'it.png',
            'flag_it_text' => 'Italiano',
            'flag_gr' => 'gr.png',
            'flag_gr_text' => 'Ελληνικα',
            'flag_al' => 'al.png',
            'flag_al_text' => 'Shqip',
            'flag_fr' => 'fr.png',
            'flag_fr_text' => 'Français',
            'flag_es' => 'es.png',
            'flag_es_text' => 'Español'
        ]);
    }
}
