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

Route::get('/', 'HomeController@showHome');
Route::get('/resume', 'HomeController@showResume');
Route::get('/portfolio', 'HomeController@showPortfolio');



Route::resource('posts', 'PostsController');

// Authentication Routes
Route::get('login', 'AuthController@showLogin');
Route::post('login', 'AuthController@doLogin');
Route::get('logout', 'AuthController@doLogout');

Route::get('search', function() {

	$search = Input::get('search');

	$query = Post::with('user')->where('title', 'like', '%' . $search . '%');

	// $query->orWhereHas('user', function($q) {
	// 	$search = Input::get('search');

	// 	$q->where('email', 'like', '%' . $search . '%');
	// });

	$posts = $query->orderBy('created_at')->paginate(4);

	foreach ($posts as $post) {
		var_dump($post);
	}

});


// $users = User::where('username')
// User::all();
// User::find(1);
// Hash::make('testPassword');
