<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavalForcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naval_forces', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('country_id');
            $table->integer('total_assets');
            $table->integer('aircraft_carriers');
            $table->integer('helicopter_carriers');
            $table->integer('destroyers');
            $table->integer('frigates');
            $table->integer('corvettes');
            $table->integer('submarines');
            $table->integer('patrol_vessels');
            $table->integer('mine_warfare');
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
        Schema::dropIfExists('naval_forces');
    }
}
