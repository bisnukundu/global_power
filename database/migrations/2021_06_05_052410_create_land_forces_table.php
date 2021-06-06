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
            $table->increments('id');
            $table->unsignedInteger('country_id');
            $table->integer('tanks');
            $table->integer('armored_vehicles');
            $table->integer('self_propelled_artillery');
            $table->integer('towed_artillery');
            $table->integer('rocket_projectors');
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
        Schema::dropIfExists('land_forces');
    }
}
