<?php

class JobController extends \BaseController {

	public function index()
	{
		$jobs = Job::all();
		return View::make('jobs.index', compact('jobs'));
	}

	public function show(Job $job)
	{
		return View::make('jobs.show', compact('job'));
	}
}
