<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraumatizedPersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traumatized_person', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone_number');
            $table->date('birdthday');
            $table->string('address');;
            $table->unsignedBigInteger('fb_follower_id')->nullable();
            $table->unsignedBigInteger('hobby_id')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('fb_follower_id')->references('id')->on('fb_follower');
            $table->foreign('hobby_id')->references('id')->on('hobby');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('traumatized_person');
    }
}
