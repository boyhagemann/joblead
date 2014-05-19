<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * Class Lead
 *
 * @protperty Account $account
 * @protperty Job $job
 */
class Lead extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'leads';

	protected $fillable = array('job_id', 'account_id', 'name', 'date_of_birth');

	/**
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function account()
	{
		return $this->belongsTo('Account');
	}

	/**
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function job()
	{
		return $this->belongsTo('Job');
	}
}
