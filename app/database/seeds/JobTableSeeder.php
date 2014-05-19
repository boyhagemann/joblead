<?php

class JobTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		Job::create(array(
			'name' => 'Test',
			'slug' => 'test',
			'body' => 'test',
			'company_id' => 1,
		));
	}

}
