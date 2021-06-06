<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeorgraphiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('georgraphies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('country_id');
            $table->integer('square_land_area');
            $table->integer('coastline_coverage');
            $table->integer('shared_borders');
            $table->integer('waterways_usable');
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
        Schema::dropIfExists('georgraphies');
    }
}
