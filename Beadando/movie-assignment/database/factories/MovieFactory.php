<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
         'title'=>$this->faker->text(),
         'director' => $this->faker->name,
         'description'=>$this->faker->text(),
         'image'=>$this->faker->text(),
         'year'=>$this->faker->numberBetween(1,600),
         'length'=>$this->faker->numberBetween(1,5),
         'ratings_enabled'=>$this->faker->boolean
        ];
    }
}
