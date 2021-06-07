<?php

namespace Database\Factories;

use App\Models\LandForces;
use Illuminate\Database\Eloquent\Factories\Factory;

class LandForcesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    private static $country_id =1;
    protected $model = LandForces::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "country_id" => self::$country_id++,
            "tanks" => $this->faker->randomNumber(),
            "armored_vehicles" => $this->faker->randomNumber(),
            'self_propelled_artillery' => $this->faker->randomNumber(),
            "towed_artillery" => $this->faker->randomNumber(),
            "rocket_projectors" => $this->faker->randomNumber(),
            'notes' => $this->faker->text(),
        ];
    }
}
