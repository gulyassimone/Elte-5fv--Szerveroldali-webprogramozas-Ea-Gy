<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    protected $model = Movie::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realTextBetween(1,100),
            'director' => $this->faker->name,
            'description' => $this->faker->realTextBetween(1,500),
            'image' => $this->faker->text(20),
            'year' => $this->faker->numberBetween(1930, 2021),
            'length' => $this->faker->numberBetween(1, 6000),
            'ratings_enabled' => $this->faker->boolean
        ];
    }
}
