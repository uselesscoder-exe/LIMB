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
        'Address' => $faker->address,
        'Contact Number' => $faker->phoneNumber

    ];
});
