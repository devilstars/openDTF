<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    return [
        /* TODO dummy data. To be deleted. */

        'title' => $faker->sentence(10),
        'body' => $faker->text,
        'teaser' => 'https://picsum.photos/800/400/?blur&ver=' . Str::random(10),

        /* TODO dummy data. To be deleted. */
    ];
});
