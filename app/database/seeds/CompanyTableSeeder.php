<?php

class CompanyTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		Company::create(array(
			'name' => 'Testcompany',
		));
	}

}
