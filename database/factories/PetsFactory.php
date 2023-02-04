<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PetsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type'=>$this->faker->city,
            'age'=>$this->faker->dayOfMonth($max = 'now'),
            'desc'=>$this->faker->sentence,
            'shop'=>$this->faker->company,

        ];
    }
}
