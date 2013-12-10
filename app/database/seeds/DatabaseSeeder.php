<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

	  $this->call('PagesTableSeeder');
	  $this->call('QuestionsTableSeeder');
	  $this->call('OptionsTableSeeder');
	  $this->call('UsersTableSeeder');
	}

}