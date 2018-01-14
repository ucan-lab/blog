<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return App\Models\User::inRandomOrder()->first()->id;
        },
        'category_id' => function() {
            return App\Models\Category::inRandomOrder()->first()->id;
        },
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
    ];
});
