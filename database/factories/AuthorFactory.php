<?php

use Faker\Generator as Faker;

$factory->define(App\Author::class, function (Faker $faker) {
    return [
      'name' => $faker->name,
      'email' => $faker->unique()->safeEmail,
      'phone' => $faker->e164PhoneNumber,
      'address' => $faker->address
    ];
});
