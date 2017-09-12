<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ec_users')->insert(
	        	[
	        		[
			            'first_name' => 'Hai',
			            'last_name' => 'Le',
			            'age' => 18,
			            'email' => 'admin@gmail.com',
			            'address' => '22 Nguyen Duc Canh, Le Chan, Hai Phong',
			            'city' => 'Hai Phong',
			            'district' => 'Le Chan',
			            'password' => bcrypt('admin'),
			            'level' => '1',
			            'created_at' => new DateTime(),
			        ],
			    	[
			            'first_name' => 'a',
			            'last_name' => 'b',
			            'age' => 18,
			            'email' => 'ab@gmail.com',
			            'address' => '22 Nguyen Duc Canh, Le Chan, Hai Phong',
			            'city' => 'Hai Phong',
			            'district' => 'Le Chan',
			            'password' => bcrypt('12345'),
			            'level' => '1',
			            'created_at' => new DateTime(),
			        ],
			    	[
			            'first_name' => 'c',
			            'last_name' => 'd',
			            'age' => 18,
			            'email' => 'cd@gmail.com',
			            'address' => '22 Nguyen Duc Canh, Le Chan, Hai Phong',
			            'city' => 'Hai Phong',
			            'district' => 'Le Chan',
			            'password' => bcrypt('12345'),
			            'level' => '2',
			            'created_at' => new DateTime(),
			        ]	
	        	]
        	);
    }
}
