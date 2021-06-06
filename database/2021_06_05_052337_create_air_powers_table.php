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
            $table->id();
            $table->integer('country_id');
            $table->integer('total_aircraft_strength');
            $table->integer('fighters/interceptors');
            $table->integer('dedicated attack');
            $table->integer('transports');
            $table->integer('trainers');
            $table->integer('special-mission');
            $table->integer('tanker_fleet');
            $table->integer('helicopters');
            $table->integer('attack_helicopters');
            $table->text('notes');
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
