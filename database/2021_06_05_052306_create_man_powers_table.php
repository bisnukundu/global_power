<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManPowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('man_powers', function (Blueprint $table) {
            $table->id();
            $table->integer('country_id');
            $table->integer('total_population');
            $table->integer('man_power');
            $table->integer('fit_for_service');
            $table->integer('reaching_mil_age_annually');
            $table->integer('tot_military_personnel');
            $table->integer('active_personnel');
            $table->integer('reserve_personnel');
            $table->integer('paramilitary');
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
        Schema::dropIfExists('man_powers');
    }
}
