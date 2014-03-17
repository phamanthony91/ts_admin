<?php

use App\Models\User;

class UserTableSeeder extends Seeder
{

	public function run()
	{
        DB::table('users')->truncate(); // Using truncate function so all info will be cleared when re-seeding.


        Sentry::getUserProvider()->create(array(
            'email' => 'phamanthony91@gmail.com',
            'password' => 'anthony91',
            'name'  => 'Anthony Pham',
            'user_level' => '1',


        ));
	}

}


