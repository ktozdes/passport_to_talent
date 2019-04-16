<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ImmigrationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('immigrations')->truncate();
		DB::table('immigrations')->insert([
			[
				'code' => 'none', 
				'description' => 'none immigration.',
				'type'=>'none', 
				'created_at' => Carbon::now()
			],
			[
				'code' => 'H1', 
				'description' => 'Hell knows what.',
				'type'=>'business', 
				'created_at' => Carbon::now()
			],
			[
				'code' => 'F1', 
				'description' => 'Study visa.',
				'type'=>'study', 
				'created_at' => Carbon::now()
			],
			[
				'code' => 'F2', 
				'description' => 'Student spouse visa.',
				'type'=>'study', 
				'created_at' => Carbon::now()
			],
		]);
    }
}
