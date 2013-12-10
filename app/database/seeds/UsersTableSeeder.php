<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('users')->truncate();

		$questions = array(
			[
				'id' => '1',
				'username' => 'admin',
				'email'	=> 'admin@example.com',
				'password'	=> Hash::make('123456'),
			]
		);

		// Uncomment the below to run the seeder
		DB::table('users')->insert($questions);
	}

}
