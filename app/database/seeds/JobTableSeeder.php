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
			'name' => 'Test vacature',
			'slug' => 'test-vacature',
			'body' => '<p>Wij zijn op zoek naar een medewerker</p>',
			'company_id' => 1,
		));
        
		Job::create(array(
			'name' => 'Test',
			'slug' => 'test',
			'body' => 'test',
			'company_id' => 1,
		));
        
		Job::create(array(
			'name' => 'Test 2',
			'slug' => 'test-2',
			'body' => 'test',
			'company_id' => 1,
		));
	}

}
