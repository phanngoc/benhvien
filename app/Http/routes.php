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

Route::get('category/{id?}', [
	'as' => 'category',
	'uses' => 'HomeController@category',
]);

Route::get('searchHopital', [
	'as' => 'searchHopital',
	'uses' => 'HomeController@searchHopital',
]);

Route::get('news/{id?}', [
	'as' => 'news',
	'uses' => 'HomeController@news',
]);

Route::post('login', [
	'as' => 'login',
	'uses' => 'HomeController@login',
]);

Route::get('client/logout', [
	'as' => 'client.logout',
	'uses' => 'HomeController@logout',
]);

Route::post('update-profile', [
	'as' => 'update-profile',
	'uses' => 'HomeController@updateProfile',
]);

Route::post('create-info-care', [
	'as' => 'create-info-care',
	'uses' => 'HomeController@createInfoCare',
]);

Route::post('update-info-care', [
	'as' => 'update-info-care',
	'uses' => 'HomeController@updateInfoCare',
]);

Route::post('delete-info-care', [
	'as' => 'delete-info-care',
	'uses' => 'HomeController@deleteInfoCare',
]);

Route::post('register-info-care', [
	'as' => 'register-info-care',
	'uses' => 'HomeController@registerInfoCare',
]);

Route::get('ykienphanhoi', [
	'as' => 'ykienphanhoi',
	'uses' => 'HomeController@submitYkienNguoiDung',
]);

Route::get('getRoomFromService', [
	'as' => 'getRoomFromService',
	'uses' => 'HomeController@getRoomFromService',
]);


Route::get('admin/login', [
	'as' => 'admin.login',
	'uses' => 'AdminController@showLogin',
]);

Route::post('admin/login', [
	'as' => 'admin.post.login',
	'uses' => 'AdminController@postLoginAdmin',
]);

Route::get('admin/logout', [
	'as' => 'admin.logout',
	'uses' => 'AdminController@logout',
]);

Route::group(['middleware' => 'admin'], function () {

	Route::get('admin/profile', [
		'as' => 'admin.profile',
		'uses' => 'AdminController@index',
	]);

	Route::post('admin/profile', [
		'as' => 'admin.updateProfile',
		'uses' => 'AdminController@updateProfile',
	]);

	Route::controller('admin', 'AdminController');
	Route::controller('new', 'NewController');
	Route::controller('science', 'ScienceController');

	Route::controller('room', 'RoomController');
	Route::controller('hopital', 'HopitalController');
	Route::controller('kindservice', 'KindServiceController');

	Route::post('updateStatusTakeMedical', [
		'as' => 'updateStatusTakeMedical',
		'uses' => 'AdminController@updateStatusTakeMedical',
	]);

});







Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
