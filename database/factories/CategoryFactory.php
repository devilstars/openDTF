<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(1),
        'slug' => Str::slug($faker->name, '-'),
        'text' => $faker->name,
    ];
});
