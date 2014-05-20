<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * Class Claim
 *
 * @protperty Account $account
 * @protperty Job $job
 */
class Claim extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'claims';

	protected $fillable = array('job_id', 'lead_id', 'status');

	/**
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function lead()
	{
		return $this->belongsTo('Lead');
	}

	/**
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function job()
	{
		return $this->belongsTo('Job');
	}
}
