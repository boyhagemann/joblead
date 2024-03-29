<?php

class AccountTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		Account::create(array(
			'email' => 'test@test.nl',
			'password' => Hash::make('test'),
		));
	}

}
