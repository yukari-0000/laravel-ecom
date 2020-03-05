<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'content' => $faker->paragraph(2),
        'image' => $faker->url,
        'price' => $faker->numberBetween(100,10000),
    ];
});
