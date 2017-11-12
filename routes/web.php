<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>['web']], function(){

	Route::get('/', function () {
    return view('home');
});
Route::get('/regpage', [
		'uses' => 'RegController@getRegister',
		'as' => 'regpage']);
	/*Route::get('/loginpage', [
		'uses' => 'RegisterController@getLogin',
		'as' => 'loginpage']);*/


Route::post('/reg', [
	'uses' => 'RegController@registration',
	'as' => 'reg'
	]);


Route::post('/login', [
	'uses' => 'RegController@login',
	'as' => 'login'
	]);

Route::get('/profile', [
		'uses' => 'RegController@getProfile',
		'as' => 'profile',
		'middleware' => 'auth'
		]);

Route::get('/home', [
		'uses' => 'RegController@getHome',
		'as' => 'home']);

Route::get('/logout', [
		'uses' => 'RegController@logout',
		'as' => 'logout']);

});

Route::get('/grouppage', [
		'uses' => 'GroupController@getGroup',
		'as' => 'grouppage']);


Route::post('/group', [
	'uses' => 'GroupController@createGroup',
	'as' => 'group'
	]);

Route::get('/group_profile/{project_name}', [
		'uses' => 'GroupController@getGroupProfile',
		'as' => 'group_profile'
		
		]);
Route::get('/dashboard', [
		'uses' => 'RegController@getprojectname',
		'as' => 'dashboard'
		
		]);

		
Route::get('/homepage',function(){
	return view('aboutHome');
});

Route::resource('task', 'TaskController');

Route::resource('chat', 'ChatController');

Route::post('/file', [
	'uses' => 'FileController@store',
	'as' => 'file'
	]);

Route::get('/download', 'FileController@getDownload');


