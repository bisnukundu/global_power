<?php

namespace Database\Factories;

use App\Models\ManPower;
use Illuminate\Database\Eloquent\Factories\Factory;

class ManPowerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ManPower::class;
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
            "total_population" => $this->faker->randomNumber(),
            "man_power" => $this->faker->randomNumber(),
            "fit_for_service" => $this->faker->randomNumber(),
            "reaching_mil_age_annually" => $this->faker->randomNumber(),
            "tot_military_personnel" => $this->faker->randomNumber(),
            "active_personnel" => $this->faker->randomNumber(),
            "reserve_personnel" => $this->faker->randomNumber(),
            "paramilitary" => $this->faker->randomNumber(),
            "notes" => $this->faker->text()
        ];
    }
}
