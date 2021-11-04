<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalleryFilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gallery_filters')->insert([
            ['name' => 'filter-swimmingpool'],
            ['name' => 'filter-restaurant'],
            ['name' => 'filter-roomview'],
            ['name' => 'filter-spa'],
        ]);
    }
}
