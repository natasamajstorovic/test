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

/*Route::get('/', function()
{
	return View::make('hello');
});
*/



Route::post('uspesnoUlogovan',array('as' => 'zavrseno', 'uses' => 'AccountController@uspesnoUlogovan'));



Route::post('registracija/registrovan',array('as'=>'registrovan','uses' => 'AccountController@uspesnoRegistrovan')); 
	
Route::get('activation','AccountController@acitvateAccount');
Route::get('login','AccountController@showlogin')->before('guest');

Route::get('registracija','AccountController@showregistracija');

Route::get('logout', 'AccountController@showLogout')->before('auth');


Route::get('login/{jezik}','AccountController@showJezik');

Route::get('home',function()
{
	return View::make('home');
});

Route::get('/{any}', function()
{
	return Redirect::to('home');
});
Route::get('/', function()
{
	return Redirect::to('home');
});







