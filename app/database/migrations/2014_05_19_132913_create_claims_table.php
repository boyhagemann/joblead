<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaimsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('claims', function(Blueprint $table) {

			$table->increments('id');
			$table->timestamps();

			$table->integer('job_id');
			$table->integer('lead_id');
			$table->enum('status', array('open', 'pending', 'closed'));

			$table->unique(array('job_id', 'lead_id'));
            $table->index('status');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('claims');
	}

}
