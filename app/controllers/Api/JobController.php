<?php

namespace Api;

use Job, Event, Input;

class JobController extends \BaseController {

	public function index()
	{
		$q = Job::query();

		Event::fire('api.job.index', Input::all(), $q);

		return $q->get();
	}

	/**
	 * @param Job $job
	 * @return Job
	 */
	public function show(Job $job)
	{
		Event::fire('api.job.show', Input::all(), $job);

		return $job;
	}
}
