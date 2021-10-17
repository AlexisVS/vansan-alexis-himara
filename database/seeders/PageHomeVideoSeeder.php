<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageHomeVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_home_videos')->insert([
            'video_src' => 'video.jpg',
            'video_href' => 'https://www.youtube.com/watch?v=BDDfopejpwk',
            'video_i_class' => 'fa-play'
        ]);
    }
}
