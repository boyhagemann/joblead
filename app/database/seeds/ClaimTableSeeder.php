<?php

class ClaimTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		Claim::create(array(
			'job_id' => 1,
			'lead_id' => 1,
			'status' => 'open',
		));

	}

}
