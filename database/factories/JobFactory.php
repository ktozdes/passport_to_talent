<?php
use App\Company;
use App\Degree;
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Job::class, function (Faker $faker) {
    return [
        'position' => $faker->jobTitle,
        'job_description' => $faker->text,
        'status' =>'open',
        'immigration_offering_id' =>1,
        'salary_range' =>$faker->numberBetween($min = 1000, $max = 9000) . ' USD' ,
        'user_id' =>User::all()->random()->id,
        'degree_id' =>Degree::all()->random()->id,
        'company_id' => Company::all()->random()->id,
    ];
});
