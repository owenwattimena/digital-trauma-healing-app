<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Hobby extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobby')->insert(
            [
                'hobby' => "Musik",
                'icon' => 'https://cdn-icons.flaticon.com/png/512/3083/premium/3083417.png?token=exp=1660710583~hmac=23b887dee2996a65c0e2a2b494523092',
                // 'icon' => 'https://cdn-icons-png.flaticon.com/512/1728/1728669.png',
            ]
        );
        DB::table('hobby')->insert(
            [
                'hobby' => "Membaca atau Menonton",
                'icon' => 'https://cdn-icons.flaticon.com/png/512/3227/premium/3227053.png?token=exp=1660710381~hmac=054a4096cfa83d66c757198249e7f6cc',
            ]
        );
        DB::table('hobby')->insert(
            [
                'hobby' => "Olahraga",
                'icon' => 'https://cdn-icons.flaticon.com/png/512/2681/premium/2681996.png?token=exp=1660710204~hmac=1cb6fdaf599989a412dcfd2d82627657',
            ]
        );
        DB::table('hobby')->insert(
            [
                'hobby' => "Seni",
                'icon' => 'https://cdn-icons.flaticon.com/png/512/1048/premium/1048944.png?token=exp=1660710639~hmac=ae3361a818979478405b719a2ed3e49a',
            ]
        );
    }
}
