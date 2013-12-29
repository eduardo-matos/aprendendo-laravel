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
	$posts = Post::with('author')->orderBy('id', 'desc')->get();
	return View::make('home')->with('posts', $posts);
});

Route::get('/users', function()
{
	$users = User::all();

	return View::make('users')->with('users', $users);
});

Route::get('admin', ['before' => 'auth', function()
{

}]);

Route::get('login', 'SessionController@showLogin');
Route::post('login', 'SessionController@tryLogin');
