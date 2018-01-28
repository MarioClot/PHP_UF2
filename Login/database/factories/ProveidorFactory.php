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

$factory->define(App\Proveidor::class, function (Faker $faker) {
    return [
        /*Nom de les columnes*/
        'referencia' => $faker->words,
        'nom' => $faker->name,
        'NIF_CIF'=> $faker->name,
        'adreca'=> $faker->address,
        'telefon'=> $faker->phoneNumber,
        'email'=> $faker->safeEmail,
        'contacte'=> $faker->name,
        'web'=> $faker->url,
        'remember_token' => str_random(10),

    ];
});
