<?php

use \Illuminate\Auth\UserInterface;

class User extends Eloquent implements UserInterface 
{
	public function posts()
	{
		return $this->hasMany('Post');
	}

	public function getAuthIdentifier()
	{
		return $this->username;
	}

	public function getAuthPassword()
	{
		return $this->password;
	}
}