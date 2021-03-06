<?php

namespace Database\Factories;

use App\Models\cities;
use Illuminate\Database\Eloquent\Factories\Factory;

class citiesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = cities::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'city' => $this->faker->name()
            
        ];
    }
}
