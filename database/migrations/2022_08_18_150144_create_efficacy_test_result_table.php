<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEfficacyTestResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('efficacy_test_result', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('treatment_period_id');
            $table->double('score');
            $table->integer('date');
            $table->enum('type', ['pre', 'post']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('efficacy_test_result');
    }
}
