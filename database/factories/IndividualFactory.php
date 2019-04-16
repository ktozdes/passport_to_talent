<?php
use App\Degree;
use App\Major;
use App\State;
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Individual::class, function (Faker $faker) {
     return [
        'firstname' => $faker->firstName,
        'lastname' 	=> $faker->lastName,
        'bio' 		=> $faker->text,
        'city' 		=> $faker->city,
        'phone' 	=> $faker->phoneNumber,
        'immigration_status' =>'salam',
        'skills' 	=> implode(', ', $faker->words(4)),

        'residence_state' 	=> State::all()->random()->id,
        'degree_id' 		=> Degree::all()->random()->id,
        'major_id'			=> Major::all()->random()->id,
        'user_id' 			=> factory(User::class)->create()->id
    ];
});
