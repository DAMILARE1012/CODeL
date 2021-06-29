<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->insert([
			'role_id' => '1',
			'fname' => 'Admin',
			'mname' => 'MAdmin',
			'lname' => 'LAdmin',
			'dob' => '23',
			'country' => 'nig',
			'state' => 'niger',
			'program' => 'computer',
			'phone' => '353443524',
			'admission_session' => '',
			'count' => '1',
			'email' => 'admin@gmail.com',
			'password' => bcrypt('adminpassword'),
		]);

		DB::table('users')->insert([
			'role_id' => '2',
			'fname' => 'User',
			'mname' => 'MUser',
			'lname' => 'LUser',
			'dob' => '23',
			'country' => 'nig',
			'state' => 'niger',
			'program' => 'computer',
			'phone' => '353443524',
			'admission_session' => '',
			'count' => '1',
			'email' => 'user@gmail.com',
			'password' => bcrypt('userpassword'),
		]);

		DB::table('users')->insert([
			'role_id' => '3',
			'fname' => 'Manager',
			'mname' => 'MManager',
			'lname' => 'LManager',
			'dob' => '23',
			'country' => 'nig',
			'state' => 'niger',
			'program' => 'computer',
			'phone' => '353443524',
			'admission_session' => '',
			'count' => '1',
			'email' => 'manager@gmail.com',
			'password' => bcrypt('managerpassword'),
		]);
	}
}
 