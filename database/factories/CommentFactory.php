<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Comment::class, function (Faker $faker) {
    return [
        'post_id' => function() {
            return App\Models\Post::inRandomOrder()->first()->id;
        },
        'author_name' => $faker->name,
        'author_url' => $faker->url,
        'body' => $faker->text,
    ];
});
