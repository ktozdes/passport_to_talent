<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DegreesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('degrees')->truncate();
		DB::table('degrees')->insert([
			['name' => 'Kindergarden', 'created_at' => Carbon::now()],
			['name' => 'No Education', 'created_at' => Carbon::now()],
			['name' => 'High School', 'created_at' => Carbon::now()],
			['name' => '2 Year College', 'created_at' => Carbon::now()],
			['name' => 'Banchelor', 'created_at' => Carbon::now()],
			['name' => 'Master', 'created_at' => Carbon::now()],
			['name' => 'Doctor', 'created_at' => Carbon::now()],
		]);
    }
}
