<?php

class User extends Eloquent
{
	public function posts()
	{
		return $this->hasMany('Post');
	}
}