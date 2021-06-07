<?php

namespace Database\Factories;

use App\Models\Georgraphy;
use Illuminate\Database\Eloquent\Factories\Factory;

class GeorgraphyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    private static $country_id = 1;
    protected $model = Georgraphy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "country_id" => self::$country_id++,
            "square_land_area" => $this->faker->randomNumber(),
            "coastline_coverage" => $this->faker->randomNumber(),
            "shared_borders" => $this->faker->randomNumber(),
            "waterways_usable" => $this->faker->randomNumber(),
            "notes" => $this->faker->text(),
        ];
    }
}
