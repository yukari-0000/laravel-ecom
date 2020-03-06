<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(3),
        'content' => $faker->paragraph(2),
        'image' => '1583128731pexels-photo-cat.jpeg',
        'price' => $faker->numberBetween(100,10000),
    ];
});
