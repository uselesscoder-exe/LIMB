<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'Code' => $faker->unique()->randomNumber,
        'Name' => $faker->name,
        'email' => $faker->email,
        'Country' => $faker->country,
        'City' => $faker->city,
        'address' => $faker->address,
        'ContactNumber' => $faker->phoneNumber
    ];
});
