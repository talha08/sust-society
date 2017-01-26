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

Route::get('/', function () {
	return Redirect::route('dashboard');
});


Route::group(['middleware' => 'guest'], function(){
	Route::controller('password', 'RemindersController');
	Route::get('login', ['as'=>'login','uses' => 'Auth\AuthController@login']);
	Route::get('user/create', ['as'=>'user.create','uses' => 'UsersController@create']);
	Route::post('user/store', ['as'=>'user.store','uses' => 'UsersController@store']);
	Route::post('login', array('uses' => 'Auth\AuthController@doLogin'));

});



Route::group(array('middleware' => 'auth'), function()
{

	Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);
	Route::get('profile', ['as' => 'profile', 'uses' => 'UsersController@profile']);
	Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'Auth\AuthController@dashboard'));
	Route::get('change-password', array('as' => 'password.change', 'uses' => 'Auth\AuthController@changePassword'));
	Route::post('change-password', array('as' => 'password.doChange', 'uses' => 'Auth\AuthController@doChangePassword'));



	//Album Section
	Route::get('album', array('as' => 'album.index', 'uses' => 'AlbumController@index'));
	Route::get('album/search/{id}', array('as' => 'album.search', 'uses' => 'AlbumController@search'));
	Route::get('album/create', ['as'=>'album.create','uses' => 'AlbumController@create']);
	Route::post('album/create', ['as'=>'album.store','uses' => 'AlbumController@store']);
	//Route::get('album/{id}/edit', array('as' => 'album.edit', 'uses' => 'AlbumController@edit'));
	Route::post('album/update', array('as' => 'album.update', 'uses' => 'AlbumController@updateAlbumImage'));
	//Route::delete('album/{id}', array('as' => 'album.delete', 'uses' => 'AlbumController@destroy'));
	Route::delete('album/{id}', array('as' => 'photo.delete', 'uses' => 'AlbumController@photoDestroy'));



	//event section  complete
	Route::get('event/status/{id}', array('as' => 'event.status', 'uses' => 'EventController@statusUpdate'));
	Route::get('event', array('as' => 'event.index', 'uses' => 'EventController@index'));
	Route::get('event/create', array('as' => 'event.create', 'uses' => 'EventController@create'));
	Route::post('event', array('as' => 'event.store', 'uses' => 'EventController@store'));
	Route::get('event/{id}/edit', array('as' => 'event.edit', 'uses' => 'EventController@edit'));
	Route::put('event/{id}/update', array('as' => 'event.update', 'uses' => 'EventController@update'));
	Route::delete('event/{id}', array('as' => 'event.delete', 'uses' => 'EventController@destroy'));

	Route::get('event-file-upload', array('as' => 'event.eventFileUpload', 'uses' => 'EventController@fileUploadView')); //file upload dropdown view
	Route::post('eventFileUpload', array('as' => 'event.upload', 'uses' => 'EventController@fileUpload')); //file upload from dropdown event
	Route::post('singleFileUpload', array('as' => 'event.singleUpload', 'uses' => 'EventController@singleFileUpload')); //for modal file upload



	//Society section  complete
	Route::get('society', array('as' => 'department.index', 'uses' => 'DepartmentController@index'));
	Route::get('society/create', array('as' => 'department.create', 'uses' => 'DepartmentController@create'));
	Route::post('society', array('as' => 'department.store', 'uses' => 'DepartmentController@store'));
	Route::get('society/{id}/edit', array('as' => 'department.edit', 'uses' => 'DepartmentController@edit'));
	Route::put('society/{id}/update', array('as' => 'department.update', 'uses' => 'DepartmentController@update'));
	Route::delete('society/{id}', array('as' => 'department.delete', 'uses' => 'DepartmentController@destroy'));


	//Society section  complete
	Route::get('society', array('as' => 'department.index', 'uses' => 'DepartmentController@index'));
	Route::get('society/create', array('as' => 'department.create', 'uses' => 'DepartmentController@create'));
	Route::post('society', array('as' => 'department.store', 'uses' => 'DepartmentController@store'));
	Route::get('society/{id}/edit', array('as' => 'department.edit', 'uses' => 'DepartmentController@edit'));
	Route::put('society/{id}/update', array('as' => 'department.update', 'uses' => 'DepartmentController@update'));
	Route::delete('society/{id}', array('as' => 'department.delete', 'uses' => 'DepartmentController@destroy'));


});





Route::get('profile1',function(){
	return View::make('template.profile')->with('title','Profile');
});

