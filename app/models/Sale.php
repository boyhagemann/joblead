<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * Class Sale
 *
 * @protperty Account $account
 * @protperty Job $job
 */
class Sale extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'sales';

	protected $fillable = array('job_id', 'lead_id');

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
