<?php

namespace Database\Factories;

use App\Models\AirPower;
use Illuminate\Database\Eloquent\Factories\Factory;

class AirPowerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    private static $country_id = 1;
    protected $model = AirPower::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'country_id' => self::$country_id++,
            'total_aircraft_strength' => $this->faker->randomNumber(),
            'fighters_interceptors' =>  $this->faker->randomNumber(),
            'dedicated_attack'=> $this->faker->randomNumber(),
            'transports'=> $this->faker->randomNumber(),
            'trainers'=> $this->faker->randomNumber(),
            'special_mission'=>$this->faker->randomNumber(),
            'tanker_fleet'=> $this->faker->randomNumber(),
            'helicopters'=> $this->faker->randomNumber(),
            'attack_helicopters'=> $this->faker->randomNumber(),
            'notes'=>$this->faker->text(),
        ];
    }
}
