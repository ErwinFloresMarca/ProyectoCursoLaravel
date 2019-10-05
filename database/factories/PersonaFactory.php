<?php

use Faker\Generator as Faker;
use App\User;
use App\Persona;

$factory->define(Persona::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'apellido' => $faker->lastName, // 123456
        'ci' => $faker->randomDigit,
        'celular' => $faker->randomDigit, // 123456
        'user_id' => function(){
            return factory(App\User::class)->create()->id;
        }
    ];
});
