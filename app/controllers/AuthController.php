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

	// Google OAUTH
	public function loginWithGoogle() {

		// get data from input
		$code = Input::get( 'code' );

		// get google service
		$googleService = OAuth::consumer( 'Google' );

		// check if code is valid

		// if code is provided get user data and sign in
		if ( !empty( $code ) ) {
			// This was a callback request from google, get the token
			$token = $googleService->requestAccessToken( $code );
			dd($token);

			// Send a request with it
			$result = json_decode( $googleService->request( 'https://www.googleapis.com/oauth2/v1/userinfo' ), true );

			$message = 'Your unique Google user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
			echo $message. "<br/>";

			//Var_dump
			//display whole array().
			dd($result);

		}
		// if not ask for permission first
		else {
			// get googleService authorization
			$url = $googleService->getAuthorizationUri();

			// return to google login url
			return Redirect::to((string) $url);
			
		}
	}

	// Linkedin OAUTH
	public function loginWithLinkedin() {

			// get data from input
			$code = Input::get( 'code' );

			$linkedinService = OAuth::consumer( 'Linkedin' );


			if ( !empty( $code ) ) {

				// This was a callback request from linkedin, get the token
				$token = $linkedinService->requestAccessToken( $code );
				// Send a request with it. Please note that XML is the default format.
				$result = json_decode($linkedinService->request('/people/~?format=json'), true);

				// Show some of the resultant data
				echo 'Your linkedin first name is ' . $result['firstName'] . ' and your last name is ' . $result['lastName'];


				//Var_dump
				//display whole array().
				dd($result);

			}// if not ask for permission first
			else {
				// get linkedinService authorization
				$url = $linkedinService->getAuthorizationUri(array('state'=>'DCEEFWF45453sdffef424'));

				// return to linkedin login url
				return Redirect::to( (string)$url );
			}

	}

}
