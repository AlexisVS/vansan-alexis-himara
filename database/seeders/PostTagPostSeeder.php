<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTagPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_tag_post')->insert([
            [
                'post_id' => 1,
                'post_tag_id' => 2,
            ],
            [
                'post_id' => 2,
                'post_tag_id' => 6,
            ],
            [
                'post_id' => 2,
                'post_tag_id' => 6,
            ],
        ]);
    }
}
