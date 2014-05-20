<?php

class SaleTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		Sale::create(array(
			'job_id' => 1,
			'lead_id' => 1,
		));

	}

}
