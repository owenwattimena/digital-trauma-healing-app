<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraumaTestResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trauma_test_result', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('treatment_period_id');
            $table->double('score');
            $table->integer('date');
            $table->unsignedBigInteger('level_trauma_id');


            $table->foreign('treatment_period_id')->references('id')->on('treatment_period');
            $table->foreign('level_trauma_id')->references('id')->on('level_trauma');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trauma_test_result');
    }
}


