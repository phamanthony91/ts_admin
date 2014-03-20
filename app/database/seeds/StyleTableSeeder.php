<?php

use App\Models\Forms;

class StyleTableSeeder extends Seeder
{

	public function run()
	{
        DB::table('styles')->truncate(); // Using truncate function so all info will be cleared when re-seeding.


        Sentry::getUserProvider()->create(array(
            'question' => 'are you working?',
            'answer' => 'yes',



        ));
	}

}