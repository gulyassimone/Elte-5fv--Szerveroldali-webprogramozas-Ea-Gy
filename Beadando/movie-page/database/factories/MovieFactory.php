<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $this->faker) {
    return [
        'title'=>$this->faker->text(),
        'director' => $this->faker->name,
        'description'=>$this->faker->text(),
        'image'=>$this->faker->text(),
        'year'=>$this->faker->numberBetween(1,600),
        'length'=>$this->faker->numberBetween(1,5),
        'ratings_enabled'=>$this->faker->boolean
    ];
});
