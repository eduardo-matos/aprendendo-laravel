<?php

class SessionController extends BaseController
{

	public function showLogin()
	{
		if(Auth::check()) return Redirect::to('/');
		return View::make('session.login');
	}

	public function tryLogin()
	{
		if(Auth::check()) Redirect::to('/');

		$credentials = [
			'username' => Input::get('username'),
			'password' => Input::get('password')
		];

		if(Auth::attempt($credentials)) {
			return Redirect::intended('/')->with('flash_message', 'Logged in successfully!');
		}

		return Redirect::back()->withInput();
	}

}
