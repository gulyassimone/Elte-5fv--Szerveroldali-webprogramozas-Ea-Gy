<?php

namespace Database\Factories;

use App\Models\Rating;
use http\Client\Curl\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RatingFactory extends Factory
{
    protected $model = Rating::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rating'=>$this->faker->numberBetween(1,5),
            'comment'=>$this->faker->realTextBetween(1,255)
        ];
    }


}
