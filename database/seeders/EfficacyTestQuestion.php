<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EfficacyTestQuestion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('efficacy_test_question')->insert(
            [
                "question" => "Masalah kesulitan untuk tidur akibat sering mengingat peristiwa bencana yang telah terjadi tidak akan terjadi lagi kepada saya, karena saya akan mampu mengabaikan kenangan buruk tersebut.",
            ]
        );
        DB::table('efficacy_test_question')->insert(
            [
                "question" => "Jika seseorang ataupun sesuatu menjadi penyebab saya tidak dapat melupakan kejadian bencana, saya akan mencari cara untuk menghindarinya, sehingga hal tersebut tidak akan lagi menghambat tujuan saya.",
            ]
        );
        DB::table('efficacy_test_question')->insert(
            [
                "question" => "Ketika saya tidak berniat untuk tidak larut dalam kenangan buruk peristiwa bencana yang telah terjadi, maka kenangan itu akan dapat segera saya hilangkan dari pikiran saya. ",
            ]
        );
        DB::table('efficacy_test_question')->insert(
            [
                "question" => "Saya tidak mudah tersinggung atau marah, meskipun ada seseorang ataupun keadaan yang mengingatkan saya akan situasi yang tidak mengenakkan yang berhubungan dengan bencana yang telah terjadi. ",
            ]
        );
        DB::table('efficacy_test_question')->insert(
            [
                "question" => "Kalau saya harus direlokasi ke tempat yang baru akibat daerah yang terkena bencana, maka hal itu tidak akan membuat saya takut, cemas karena saya yakin akan dapat mengatasi keadaan tersebut. ",
            ]
        );
        DB::table('efficacy_test_question')->insert(
            [
                "question" => "Jikalau masih terdapat masalah yang ditimbulkan akibat kejadian bencana yang terjadi, saya yakin saya pasti memiliki jalan keluarnya. ",
            ]
        );
        DB::table('efficacy_test_question')->insert(
            [
                "question" => "Saya tidak perlu terlalu waspada dan berjaga-jaga yang berlebihan, karena saya dapat menghadapi kesulitan dengan tenang dan saya selalu dapat mengandalkan kemampuan saya.",
            ]
        );
        DB::table('efficacy_test_question')->insert(
            [
                "question" => "Kalau saya menghadapi ketakutan dan kekuatiran akan bencana, saya akan mempunyai banyak ide untuk mengalihkan pikiran agar dapat menghilangkan perasaan takut dan kuatir.",
            ]
        );
        DB::table('efficacy_test_question')->insert(
            [
                "question" => "Saya tidak menjadi sering gelisah dan mudah terkejut ",
            ]
        );
        DB::table('efficacy_test_question')->insert(
            [
                "question" => "Kalaupun bencana itu datang kembali, saya yakin saya akan siap dan mampu menghadapinya.",
            ]
        );
    }
}
