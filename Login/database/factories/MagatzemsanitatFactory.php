<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Magatzemsanitat::class, function (Faker $faker) {
    return [

        'localitzacio' => $faker->words,
        'nom' => $faker->name,
        'stock_inici' => $faker->latitude,
        'stock_final' => $faker->latitude,
        'necessitem' => $faker->latitude,
        'percentatge_minim' => $faker->century,
        'proveidor' => $faker->name,
        'referencia_proveidor' => $faker->words,
        'remember_token' => str_random(10),

    ];
});