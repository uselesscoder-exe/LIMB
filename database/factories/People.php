<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\People;
use Faker\Generator as Faker;

$factory->define(People::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'age' => $faker->numberBetween(15,90),
        'region' => $faker->country,
        'phone' => $faker->RandomNumber,
        'AreaCode' => $faker->areaCode,
        'wealth' => $faker->RandomNumber,
    ];
});
// // $table->bigIncrements('id');
//             $table->string('name');
//             $table->string('address');
//             $table->integer('age');
//             $table->string('region');
//             $table->string('phone');
//             $table->string('status');
//             $table->sting('wealth');
