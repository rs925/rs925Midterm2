<?php

use Faker\Generator as Faker;


$factory->define(App\Car::class, function (Faker $faker) {
    return [

        'Make' => $faker->randomElement($array = ['FORD','TOYOTA','HONDA']),

        'Model' => str_random(3),

        'Year' => rand(1903,2018),

    ];
});
