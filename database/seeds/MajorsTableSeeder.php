<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MajorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('majors')->truncate();
		DB::table('majors')->insert([
			[
				'name' => 'MBA', 
				'description' => 'master of Businness Administration.',
				'type'=>'business', 
				'created_at' => Carbon::now()
			],
			[
				'name' => 'MSci', 
				'description' => 'master of Science.',
				'type'=>'science', 
				'created_at' => Carbon::now()
			],
			[
				'name' => 'MSSc', 
				'description' => 'master of Social Studies.',
				'type'=>'humanitarian', 
				'created_at' => Carbon::now()
			],
		]);
    }
}
