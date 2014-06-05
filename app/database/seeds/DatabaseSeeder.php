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

        //This runs the very first seeding file called
        //UserTableSeeder.php and its class extends Seeder
		$this->call('UserTableSeeder');
	}

}
