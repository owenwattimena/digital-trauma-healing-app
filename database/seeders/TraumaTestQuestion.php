<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TraumaTestQuestion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trauma_test_question')->insert(
            [
                "question" => "Anda tidak akan terlalu sering mengingat-ingat awal mula kejadian bencana",
            ]
        );
        DB::table('trauma_test_question')->insert(
            [
                "question" => "Anda mengalami kesulitan untuk tidur",
            ]
        );
        DB::table('trauma_test_question')->insert(
            [
                "question" => "Hal-hal disekitar Anda terus membuat Anda memikirkan mengenai bencana yang terjadi",
            ]
        );
        DB::table('trauma_test_question')->insert(
            [
                "question" => "Anda merasa mudah tersinggung dan marah",
            ]
        );
        DB::table('trauma_test_question')->insert(
            [
                "question" => "Anda berusaha untuk tidak larut dalam emosi ketika memikirkan atau teringat akan peristiwa bencana yang terjadi.",
            ]
        );
        DB::table('trauma_test_question')->insert(
            [
                "question" => "Meskipun Anda tidak bermaksud untuk memikirkannya, tapi kejadian bencana itu selalu terlintas dipikiran.",
            ]
        );
        DB::table('trauma_test_question')->insert(
            [
                "question" => "Anda masih tidak percaya kalau bencana yang terjadi itu adalah real/nyata",
            ]
        );
        DB::table('trauma_test_question')->insert(
            [
                "question" => "Anda berusaha menjauhkan diri dari hal-hal yang dapat mengingatkan pada kejadian bencana",
            ]
        );
        DB::table('trauma_test_question')->insert(
            [
                "question" => "Gambaran atau bayangan tentang bencana itu sering muncul di pikiran Anda.",
            ]
        );
        DB::table('trauma_test_question')->insert(
            [
                "question" => "Anda menjadi gelisah dan mudah terkejut.",
            ]
        );
        DB::table('trauma_test_question')->insert(
            [
                "question" => "Anda mencoba untuk tidak memikirkan hal-hal yang berkaitan dengan bencana.",
            ]
        );
        DB::table('trauma_test_question')->insert(
            [
                "question" => "Anda berusaha tidak perduli setiap kali peristiwa itu melintas di pikiran Anda.",
            ]
        );
        DB::table('trauma_test_question')->insert(
            [
                "question" => "Anda seperti mati rasa terhadap peristiwa bencana itu. ",
            ]
        );
        DB::table('trauma_test_question')->insert(
            [
                "question" => "Terkadang Anda bersikap seperti ketika awal bencana terjadi. ",
            ]
        );
        DB::table('trauma_test_question')->insert(
            [
                "question" => "Anda mengalami masalah dengan tidur.",
            ]
        );
        DB::table('trauma_test_question')->insert(
            [
                "question" => "Anda merasa shock dengan peristiwa bencana yang telah terjadi.",
            ]
        );
        DB::table('trauma_test_question')->insert(
            [
                "question" => "Anda mencoba menghapus peristiwa bencana itu dari ingatan Anda.",
            ]
        );
        DB::table('trauma_test_question')->insert(
            [
                "question" => "Anda mengalami kesulitan dalam berkonsentrasi.",
            ]
        );
        DB::table('trauma_test_question')->insert(
            [
                "question" => "Apabila mengingat Peristiwa bencana itu, Anda mengalami reaksi fisik seperti berkeringat, kesulitan bernafas, rasa mual, atau jantung berdebar.",
            ]
        );
        DB::table('trauma_test_question')->insert(
            [
                "question" => "Anda sering memimpikan kejadian bencana.",
            ]
        );
        DB::table('trauma_test_question')->insert(
            [
                "question" => "Anda menjadi lebih waspada dan selalu berjaga-jaga.",
            ]
        );
        DB::table('trauma_test_question')->insert(
            [
                "question" => "Anda menghindari pembicaraan tentang peristiwa bencana itu. ",
            ]
        );
    }
}
