<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return 'test';
});

Route::bind('jobs', function($slug) {
	return Job::where('slug', $slug)->firstOrFail();
});

Route::model('leads', 'Lead');

Route::resource('jobs', 'JobController');

Route::resource('leads', 'LeadController');
Route::get('jobs/{jobs}/leads/create', array(
	'as' => 'leads.create',
	'uses' => 'LeadController@create'
));
Route::post('jobs/{jobs}/leads', array(
	'as' => 'leads.store',
	'uses' => 'LeadController@store'
));
