<?php

class AuthController extends BaseController
{
	public function showLogin() 
	{
		return View::make('login');

	}
	public function doLogin() 
	{

		$email    = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
			Session::flash('successMessage', "You've logged in! Welcome!");

    		return Redirect::intended('/');
		} else {
			Session::flash('errorMessage', 'Failed to log in');
			return Redirect::action('HomeController@showLogin')->withInput();	
		}
	}

	public function doLogout() 
	{
		Auth::logout();
		Session::flash('successMessage', 'You are logged out.');
		return Redirect::action('HomeController@showHome');
	}

}
