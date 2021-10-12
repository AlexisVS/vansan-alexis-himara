<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageHomeAboutProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_home_about_providers')->insert([
            [
                'provider_href' => '#',
                'provider_img' => 'provider-1.png'
            ],
            [
                'provider_href' => '#',
                'provider_img' => 'provider-2.png'
            ],
            [
                'provider_href' => '#',
                'provider_img' => 'provider-3.png'
            ],
            [
                'provider_href' => '#',
                'provider_img' => 'provider-4.png'
            ],
        ]);
    }
}
