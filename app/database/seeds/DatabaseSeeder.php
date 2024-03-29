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

		 $this->call('AccountTableSeeder');
		 $this->call('CompanyTableSeeder');
		 $this->call('JobTableSeeder');
		 $this->call('LeadTableSeeder');
		 $this->call('ClaimTableSeeder');
	}

}
