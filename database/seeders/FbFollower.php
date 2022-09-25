<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FbFollower extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fb_follower')->insert(
            [
                'value' => "0 - 100",
                'level' => 1,
            ]
        );
        DB::table('fb_follower')->insert(
            [
                'value' => "100 - 1000",
                'level' => 2,
            ]
        );
        DB::table('fb_follower')->insert(
            [
                'value' => " > 1000",
                'level' => 3,
            ]
        );
    }
}
