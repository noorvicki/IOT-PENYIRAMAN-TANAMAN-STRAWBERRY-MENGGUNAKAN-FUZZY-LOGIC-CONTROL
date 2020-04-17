<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Sensor;
use Faker\Generator as Faker;

$factory->define(Sensor::class, function (Faker $faker) {

    return [
        'kelembaban' => $faker->randomDigitNotNull,
        'suhu' => $faker->randomDigitNotNull,
        'ph' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});