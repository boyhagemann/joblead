<?php

class LeadTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		Lead::create(array(
			'job_id' => 1,
			'account_id' => 1,
			'name' => 'Test lead name',
			'date_of_birth' => '1990-12-23',
		));

	}

}
