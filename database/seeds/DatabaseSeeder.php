<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(StatesTableSeeder::class);
    	$this->call(DegreesTableSeeder::class);
    	$this->call(MajorsTableSeeder::class);
        $this->call(ImmigrationTableSeeder::class);
    	$this->call(IndividualTableSeeder::class);
        
        $this->call(CompanyTableSeeder::class);
        $this->call(JobTableSeeder::class);
    }
}
