<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelTrauma extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('level_trauma')->insert(
            [
                "level" => "Ringan",
                "lowwer_bound" => 0,
                "upper_bound" => 25,
            ]
        );
        DB::table('level_trauma')->insert(
            [
                "level" => "Sedang",
                "lowwer_bound" => 26,
                "upper_bound" => 43,
            ]
        );
        DB::table('level_trauma')->insert(
            [
                "level" => "Berat",
                "lowwer_bound" => 44,
                "upper_bound" => 100,
            ]
        );
    }
}
