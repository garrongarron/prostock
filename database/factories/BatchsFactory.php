<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Batchs;
use Faker\Generator as Faker;

$factory->define(Batchs::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->unique()->email
    ];
});
