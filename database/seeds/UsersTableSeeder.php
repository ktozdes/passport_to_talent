<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->truncate();
        DB::table('users')->insert([
        	[
	            'name' => 'Chyngyz Sydykov',
	            'email' => 'chyngyz6@gmail.com',
	            'password' => '$2y$10$wLCBX8SIiI/boqJZkQC4quNS6ASr.jaOdvQVpAVIDVsGjJDmXzZr2',
	            'permissions' => '{"manage-admin": 1,"manage-degree": 1,"manage-major": 1,"manage-job": 1,"manage-individual": 1,"manage-company": 1}',
                'created_at' => Carbon::now(),
    		],
    	]);

        //factory('App\User', 20)->create();
    }
}
