<?php

class JobController extends \BaseController {

	public function index()
	{
		$jobs = API::get('api/jobs');

		return View::make('jobs.index', compact('jobs'));
	}

	public function show(Job $job)
	{
		return View::make('jobs.show', compact('job'));
	}
}
