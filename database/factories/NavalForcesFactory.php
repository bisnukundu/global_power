<?php

namespace Database\Factories;

use App\Models\NavalForces;
use Illuminate\Database\Eloquent\Factories\Factory;

class NavalForcesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NavalForces::class;
    protected static $country_id =1;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "country_id" => self::$country_id++,
            "total_assets" => $this->faker->randomNumber(),
            "aircraft_carriers" => $this->faker->randomNumber(),
            "helicopter_carriers" => $this->faker->randomNumber(),
            "destroyers" => $this->faker->randomNumber(),
            "frigates" => $this->faker->randomNumber(),
            "corvettes" => $this->faker->randomNumber(),
            "submarines" => $this->faker->randomNumber(),
            "patrol_vessels" => $this->faker->randomNumber(),
            "mine_warfare" => $this->faker->randomNumber(),
            "notes" => $this->faker->text()
        ];
    }
}
