<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'outlet_id' => rand(1, 10),
        'name' => $faker->word,
        'price' => rand(1000, 10000),
        'qty' => rand(5, 50),
        'photo' => 'image.png',
        'description' => $faker->words
    ];
});
