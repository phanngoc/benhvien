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

Route::get('home/{id?}', [
	'as' => 'home',
	'uses' => 'HomeController@index',
]);

Route::get('ykienphanhoi', [
	'as' => 'ykienphanhoi',
	'uses' => 'HomeController@submitYkienNguoiDung',
]);

Route::get('getRoomFromService', [
	'as' => 'getRoomFromService',
	'uses' => 'HomeController@getRoomFromService',
]);

Route::get('admin/profile', [
	'as' => 'admin.profile',
	'uses' => 'AdminController@index',
]);



Route::controller('admin', 'AdminController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
