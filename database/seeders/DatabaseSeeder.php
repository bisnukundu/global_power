<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Country::factory(195)->create();

        \App\Models\AirPower::factory(195)->create();
        \App\Models\Financials ::factory(195)->create();
        \App\Models\Georgraphy ::factory(195)->create();
        \App\Models\LandForces ::factory(195)->create();
        \App\Models\Logistic ::factory(195)->create();
        \App\Models\ManPower ::factory(195)->create();
        \App\Models\NaturalResources ::factory(195)->create();
        \App\Models\NavalForces ::factory(195)->create();
    }
}
