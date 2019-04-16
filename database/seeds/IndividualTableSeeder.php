<?php

use Illuminate\Database\Seeder;

class IndividualTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('individuals')->truncate();
    	DB::table('users')->truncate();
        factory('App\Individual', 20)->create();
    }
}
