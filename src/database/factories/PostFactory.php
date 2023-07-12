<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 3),
            'title' => $this->faker->word(),
            'message' => $this->faker->realText(),
            'created_at' => $this->faker->dateTimeBetween('-1 week')
        ];
    }
}
