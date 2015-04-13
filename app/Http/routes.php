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

Route::get('/', 'WelcomeController@index');

Route::get('Leisure', 'ChangeController@leisure');

//Route::get('Leisure1','VisaController@leisure1');

Route::get('Medical', 'WelcomeController@medical');

Route::get('Accom', 'WelcomeController@accom');

Route::get('Form', 'WelcomeController@form');

Route::post('Form', 'WelcomeController@store');

Route::post('Leisure','ChangeController@form');

//Route::post('Leisure1','VisaController@form1');



Route::get('mail',function(){
	Mail::send('mail',[],function($message){
		$message->to('sanjay.kns2@gmail.com','sanjay')->subject('hello');
	});
});



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
