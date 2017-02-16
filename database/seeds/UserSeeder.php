<?php

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert(
    		array(
		  	'id' => '1',
		  	'name' => 'Rahul',
		  	'email' => 'rahul@gmail.com',
		  	'password' => '$2y$10$jySx6YrVnZ1y7wfPSmsEUO3IbqstMQwFLjJs7at1Qsd8BNoN/ctw6',
		  	'remember_token' => NULL,
		  	'created_at' => '2017-02-12 03:40:55',
		  	'updated_at' => '2017-02-12 03:40:55'
		));
		  
    }
}
