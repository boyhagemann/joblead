<?php

class AccountController extends \BaseController {

	public function create()
	{
		return View::make('account.create');
	}

	public function login()
	{
		return View::make('account.login');
	}

	public function store()
	{
		try {

			$email = Input::get('email');
			$password = Input::get('password');

			$v = Validator::make(Input::all(), array(
				'email' => 'required:unique',
				'password' => 'required',
			));

			if($v->fails()) {
				return Redirect::route('account.create')->withErrors($v->errors());
			}

			Account::create(array(
				'email' => $email,
				'password' => Hash::make($password),
			));

			if (!Auth::attempt(compact('email', 'password')))
			{
				throw new Exception('Could not log in');
			}

			return Redirect::intended('dashboard');

		}
		catch(Exception $e) {
			dd($e);
			return Redirect::route('account.create')->withError('Something went wrong...');
		}

	}

	public function auth()
	{
		try {

			$email = Input::get('email');
			$password = Input::get('password');

			$v = Validator::make(Input::all(), array(
				'email' => 'required',
				'password' => 'required',
			));

			if($v->fails()) {
				return Redirect::route('account.login')->withErrors($v->errors());
			}

			if (!Auth::attempt(compact('email', 'password')))
			{
				throw new Exception('Could not log in');
			}

			return Redirect::intended('dashboard');

		}
		catch(Exception $e) {
			return Redirect::route('account.login')->withError('Something went wrong...');
		}

	}

	public function dashboard()
	{
		$leads = App::make('Api\LeadController')->index();

		return View::make('account.dashboard', compact('leads'));
	}

	public function logout()
	{
		Auth::logout();

		return Redirect::route('account.login');
	}
}
