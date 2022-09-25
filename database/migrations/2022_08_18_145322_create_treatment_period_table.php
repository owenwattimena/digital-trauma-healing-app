<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatmentPeriodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatment_period', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('traumatized_person_id');
            $table->integer('date_start');
            $table->integer('date_end');

            $table->foreign('traumatized_person_id')->references('id')->on('traumatized_person');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treatment_period');
    }
}
