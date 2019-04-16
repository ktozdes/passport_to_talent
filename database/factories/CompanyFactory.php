<?php

use Faker\Generator as Faker;
use App\State;
use App\User;

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'website' => $faker->safeEmailDomain,
        'city' => $faker->city,
        'bio' => $faker->text,
        'state_id' => State::all()->random()->id,
        'user_id' =>User::all()->random()->id,
    ];
});
