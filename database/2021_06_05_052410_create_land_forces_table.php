<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandForcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('land_forces', function (Blueprint $table) {
            $table->id();
            $table->integer('country_id');
            $table->integer('tanks');
            $table->integer('armored_vehicles');
            $table->integer('self_propelled_artillery');
            $table->integer('towed_artillery');
            $table->integer('rocket_projectors');
            $table->char('notes');
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
        Schema::dropIfExists('land_forces');
    }
}
