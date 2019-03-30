<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->truncate();
		DB::table('states')->insert([
			['name' => 'Alaska', 'code' => 'AK', 'created_at' => Carbon::now()],
			['name' => 'Alabama', 'code' => 'AL', 'created_at' => Carbon::now()],
			['name' => 'American Samoa', 'code' => 'AS', 'created_at' => Carbon::now()],
			['name' => 'Arizona', 'code' => 'AZ', 'created_at' => Carbon::now()],
			['name' => 'Arkansas', 'code' => 'AR', 'created_at' => Carbon::now()],
			['name' => 'California', 'code' => 'CA', 'created_at' => Carbon::now()],
			['name' => 'Colorado', 'code' => 'CO', 'created_at' => Carbon::now()],
			['name' => 'Connecticut', 'code' => 'CT', 'created_at' => Carbon::now()],
			['name' => 'Delaware', 'code' => 'DE', 'created_at' => Carbon::now()],
			['name' => 'District of Columbia', 'code' => 'DC', 'created_at' => Carbon::now()],
			['name' => 'Federated States of Micronesia', 'code' => 'FM', 'created_at' => Carbon::now()],
			['name' => 'Florida', 'code' => 'FL', 'created_at' => Carbon::now()],
			['name' => 'Georgia', 'code' => 'GA', 'created_at' => Carbon::now()],
			['name' => 'Guam', 'code' => 'GU', 'created_at' => Carbon::now()],
			['name' => 'Hawaii', 'code' => 'HI', 'created_at' => Carbon::now()],
			['name' => 'Idaho', 'code' => 'ID', 'created_at' => Carbon::now()],
			['name' => 'Illinois', 'code' => 'IL', 'created_at' => Carbon::now()],
			['name' => 'Indiana', 'code' => 'IN', 'created_at' => Carbon::now()],
			['name' => 'Iowa', 'code' => 'IA', 'created_at' => Carbon::now()],
			['name' => 'Kansas', 'code' => 'KS', 'created_at' => Carbon::now()],
			['name' => 'Kentucky', 'code' => 'KY', 'created_at' => Carbon::now()],
			['name' => 'Louisiana', 'code' => 'LA', 'created_at' => Carbon::now()],
			['name' => 'Maine', 'code' => 'ME', 'created_at' => Carbon::now()],
			['name' => 'Marshall Islands', 'code' => 'MH', 'created_at' => Carbon::now()],
			['name' => 'Maryland', 'code' => 'MD', 'created_at' => Carbon::now()],
			['name' => 'Massachusetts', 'code' => 'MA', 'created_at' => Carbon::now()],
			['name' => 'Michigan', 'code' => 'MI', 'created_at' => Carbon::now()],
			['name' => 'Minnesota', 'code' => 'MN', 'created_at' => Carbon::now()],
			['name' => 'Mississippi', 'code' => 'MS', 'created_at' => Carbon::now()],
			['name' => 'Missouri', 'code' => 'MO', 'created_at' => Carbon::now()],
			['name' => 'Montana', 'code' => 'MT', 'created_at' => Carbon::now()],
			['name' => 'Nebraska', 'code' => 'NE', 'created_at' => Carbon::now()],
			['name' => 'Nevada', 'code' => 'NV', 'created_at' => Carbon::now()],
			['name' => 'New Hampshire', 'code' => 'NH', 'created_at' => Carbon::now()],
			['name' => 'New Jersey', 'code' => 'NJ', 'created_at' => Carbon::now()],
			['name' => 'New Mexico', 'code' => 'NM', 'created_at' => Carbon::now()],
			['name' => 'New York', 'code' => 'NY', 'created_at' => Carbon::now()],
			['name' => 'North Carolina', 'code' => 'NC', 'created_at' => Carbon::now()],
			['name' => 'North Dakota', 'code' => 'ND', 'created_at' => Carbon::now()],
			['name' => 'Northern Mariana Islands', 'code' => 'MP', 'created_at' => Carbon::now()],
			['name' => 'Ohio', 'code' => 'OH', 'created_at' => Carbon::now()],
			['name' => 'Oklahoma', 'code' => 'OK', 'created_at' => Carbon::now()],
			['name' => 'Oregon', 'code' => 'OR', 'created_at' => Carbon::now()],
			['name' => 'Palau', 'code' => 'PW', 'created_at' => Carbon::now()],
			['name' => 'Pennsylvania', 'code' => 'PA', 'created_at' => Carbon::now()],
			['name' => 'Puerto Rico', 'code' => 'PR', 'created_at' => Carbon::now()],
			['name' => 'Rhode Island', 'code' => 'RI', 'created_at' => Carbon::now()],
			['name' => 'South Carolina', 'code' => 'SC', 'created_at' => Carbon::now()],
			['name' => 'South Dakota', 'code' => 'SD', 'created_at' => Carbon::now()],
			['name' => 'Tennessee', 'code' => 'TN', 'created_at' => Carbon::now()],
			['name' => 'Texas', 'code' => 'TX', 'created_at' => Carbon::now()],
			['name' => 'Utah', 'code' => 'UT', 'created_at' => Carbon::now()],
			['name' => 'Vermont', 'code' => 'VT', 'created_at' => Carbon::now()],
			['name' => 'Virgin Islands', 'code' => 'VI', 'created_at' => Carbon::now()],
			['name' => 'Virginia', 'code' => 'VA', 'created_at' => Carbon::now()],
			['name' => 'Washington', 'code' => 'WA', 'created_at' => Carbon::now()],
			['name' => 'West Virginia', 'code' => 'WV', 'created_at' => Carbon::now()],
			['name' => 'Wisconsin', 'code' => 'WI', 'created_at' => Carbon::now()],
			['name' => 'Wyoming', 'code' => 'WY', 'created_at' => Carbon::now()],
		]);
    }
}
