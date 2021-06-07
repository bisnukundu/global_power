<?php

namespace Database\Factories;

use App\Models\NaturalResources;
use Illuminate\Database\Eloquent\Factories\Factory;

class NaturalResourcesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NaturalResources::class;
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
            "oil_production" => $this->faker->randomNumber(),
            "oil_consumption" => $this->faker->randomNumber(),
            "oil_proven_reserves" => $this->faker->randomNumber(),
            "notes" => $this->faker->text()
        ];
    }
}
