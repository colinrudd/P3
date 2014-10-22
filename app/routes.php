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

// homepage
Route::get('/', function()
{
	return View::make('home');
});

// lorem ipsum
Route::get('/lorem', function()
{
	return View::make('lorem');
});

// lorem ipsum results
Route::post('/lorem', function()
{
	$paragraphs = Input::get('paragraphs');

	if (!is_numeric($paragraphs) || $paragraphs == 0)
		{ $paragraphs = 1; }

	return View::make('lorem-result')
	->with('paragraphs', $paragraphs);
});

// users
Route::get('/users', function()
{
	return View::make('users');
});

// users results
Route::post('/users-result', function()
{
	$users = Input::get('users');

	if (!is_numeric($users) || $users <= 0)
		{ $users = 1; }

	$address = Input::get('address');
	$birthday = Input::get('birthday');
	$blurb = Input::get('blurb');

	return View::make('users-result', array(
		'users' => $users,
		'address' => $address,
		'birthday' => $birthday,
		'blurb' => $blurb
		));
});