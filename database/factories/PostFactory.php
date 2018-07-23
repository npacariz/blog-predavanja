<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
   
 
    return [
        'title' => $faker->sentences(1, true),
        'body' => $faker->text(255),
        'published' => true,

    ];
});
