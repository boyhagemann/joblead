<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('leads', function(Blueprint $table) {

			$table->increments('id');
			$table->timestamps();

			$table->integer('job_id');
			$table->integer('account_id');

			$table->string('name');
			$table->date('date_of_birth');

			$table->unique(array('job_id', 'account_id'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('leads');
	}

}
