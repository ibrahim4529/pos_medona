<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'outlet_id' => rand(1, 10),
        'name' => $faker->lastName,
        'email' => $faker->companyEmail,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber
    ];
});
