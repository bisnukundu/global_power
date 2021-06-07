<?php

namespace Database\Factories;

use App\Models\Logistic;
use Illuminate\Database\Eloquent\Factories\Factory;

class LogisticFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Logistic::class;
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
            "labor_force" => $this->faker->randomNumber(),
            "marchant_marine_fleet" => $this->faker->randomNumber(),
            "ports_trade_terminals" =>$this->faker->randomNumber(),
            "roadway_coverage" => $this->faker->randomNumber(),
            "railway_coverage" => $this->faker->randomNumber(),
            "airports" => $this->faker->randomNumber(),
            "notes" => $this->faker->text()
        ];
    }
}
