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
            'welcome-mssg' => 'Welcome to Hotel Himara.',
            'a-tel-href' => 'tel:+18881234567',
            'a-tel-i-class' => 'fa-phone',
            'a-tel-text' => '+1 888 123 4567',
            'a-mail-href' => 'mailto:contact@hotelhimara.com',
            'a-mail-i-class' => 'fa-envelope-o',
            'a-mail-text' => 'contact@hotelhimara.com',
            'flag-active' => 'gb.png',
            'flag-it' => 'it.png',
            'flag-gr' => 'gr.png',
            'flag-al' => 'al.png',
            'flag-fr' => 'fr.png',
            'flag-es' => 'es.png'
        ]);
    }
}
