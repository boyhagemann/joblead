<?php

class LeadController extends \BaseController {

	public function create(Job $job)
	{
		return View::make('leads.create', compact('job'));
	}

	public function store(Job $job)
	{
		Lead::create(array(
			'job_id' => $job->id,
			'account_id' => 1,
			'name' => Input::get('name'),
			'date_of_birth' => Input::get('date_of_birth')
		));

		return Redirect::route('jobs.show', $job->id);
	}
}
