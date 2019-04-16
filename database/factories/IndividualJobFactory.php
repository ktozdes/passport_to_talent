<?php

use Faker\Generator as Faker;

$factory->define(App\IndividualJob::class, function (Faker $faker) {
    return [
        'status' =>'applied',
        'job_id' =>Degree::all()->random()->id,
        'individual_id' => Company::all()->random()->id,
    ];
});
