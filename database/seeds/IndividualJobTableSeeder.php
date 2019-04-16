<?php

use Illuminate\Database\Seeder;
use App\Job;
use App\Individual;
class IndividualJobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$individuals = Individual::all();
        Job::all()->each(function ($job) use ($individuals) { 
		    $job->individuals()->attach(
		        $individuals->random(rand(1, 5))->pluck('id')->toArray()
		    ); 
		});
    }
}
