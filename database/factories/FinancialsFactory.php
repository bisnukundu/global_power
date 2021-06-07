<?php

namespace Database\Factories;

use App\Models\Financials;
use Illuminate\Database\Eloquent\Factories\Factory;

class FinancialsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    private static $country_id =1;
    protected $model = Financials::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "country_id" => self::$country_id++,
            "defense_budget" => $this->faker->randomNumber(),
            "external_debt" =>$this->faker->randomNumber(),
            "foreign_exchange_gold" => $this->faker->randomNumber(),
            "purchasing_power_parity" => $this->faker->randomNumber(),
            "notes" =>$this->faker->text()
        ];
    }
}
