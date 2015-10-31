<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('home', function(){
// 	if(Auth::guest()){
// 		//return Redirect::to('pages.home');
//    return View::make('pages.home');
// 	}else{
// 		echo 'Welcome!, ' .Auth::user()->name. '.';
// 	}
//});

Route::get('user/{id}' , function($id){
	$user = App\User::find($id);
	echo 'The user with ID of ' .$id. 'email :' .$user->email;

});


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/',function(){
	return View::make('pages.home');
});

 Route::get('home',function(){
    return View::make('pages.home');
 });

Route::get('auth/register',function(){
    return View::make('auth.register');
});

Route::get('auth/login',function(){
    return View::make('auth.login');
});

Route::get('about',function(){
	return View::make('pages.about');
});

Route::get('projects',function(){
	return View::make('pages.projects');
});

Route::get('contact',function(){
	return View::make('pages.contact');
});
