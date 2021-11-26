<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        "title" => $faker->text(100),
        "description" => $faker->text(1000),
        "user_id" => \App\User::all()->random()->id,
        "category_id" => \App\Category::all()->random()->id,
    ];
});
