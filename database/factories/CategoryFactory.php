<?php

use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/** @var Factory $factory */
$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->colorName,
        'description' => rand(1, 10) % 2 == 0 ? $faker->sentence() : null
    ];
});
