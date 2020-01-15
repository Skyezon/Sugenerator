<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Internal;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

//'name', 'role', 'token','motivation'
$factory->define(Internal::class, function (Faker $faker) {

    return [
        'name'=> $faker->name,
        'role'=> 'aktivis',
        'token' => Str::random(5),
        'motivation' => $faker->paragraph
    ];
});
