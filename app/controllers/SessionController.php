<?php

class SessionController extends BaseController
{

	public function showLogin()
	{
		return View::make('session.login');
	}

	public function tryLogin()
	{
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
