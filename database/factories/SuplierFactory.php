<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Supplier;
use Faker\Generator as Faker;

$factory->define(Supplier::class, function (Faker $faker) {
    return [
        'outlet_id' => rand(1, 10),
        'name' => $faker->word,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'email' => $faker->freeEmail,
    ];
});
