<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirPowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('air_powers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('country_id');
            $table->integer('total_aircraft_strength');
            $table->integer('fighters_interceptors');
            $table->integer('dedicated_attack');
            $table->integer('transports');
            $table->integer('trainers');
            $table->integer('special_mission');
            $table->integer('tanker_fleet');
            $table->integer('helicopters');
            $table->integer('attack_helicopters');
            $table->text('notes');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('air_powers');
    }
}
