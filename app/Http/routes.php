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

    if(Auth::user())
        return redirect()->route('societyAuth');
    else
        return redirect()->route('welcome');

});


Route::group(['middleware' => 'guest'], function(){
	Route::controller('password', 'RemindersController');
	#Route::get('login', ['as'=>'login','uses' => 'Auth\AuthController@login']);
	Route::get('user/createOrLogin', ['as'=>'user.create','uses' => 'UsersController@create']);
	Route::post('user/store', ['as'=>'user.store','uses' => 'UsersController@store']);
    Route::post('society/applly', array('as' => 'department.request', 'uses' => 'Auth\SignupController@deptRequest'));

    Route::get('login', ['as'=>'login','uses' => 'UsersController@login']);
    Route::post('login', array('uses' => 'Auth\AuthController@doLogin'));


});



Route::group(['prefix' => '/home'], function () {

#frontend
Route::get('welcome', ['as'=>'welcome','uses' => 'FrontendController@index']);
Route::get('notices', ['as'=>'notice','uses' => 'FrontendController@notice']);
Route::get('notices/search', ['as'=> 'notice.search','uses'=>'FrontendController@noticeSearch']);
Route::get('notices/{notice_meta_data}', ['as'=>'notice.details','uses' => 'FrontendController@noticeDetails']);
Route::get('events', ['as'=>'event','uses' => 'FrontendController@event']);
Route::get('events/search', ['as'=> 'event.search','uses'=>'FrontendController@eventSearch']);
Route::get('events/{event_meta_data}', ['as'=>'event.details','uses' => 'FrontendController@eventDetails']);
Route::get('society', array('as' => 'society', 'uses' => 'DepartmentController@allSociety'));



#Contact Section
Route::get('contact', array('as' => 'contact', 'uses' => 'ContactController@contact'));
Route::post('contact',['as' => 'contact.store', 'uses' => 'ContactController@getContactUsForm']);

#Department
Route::get('department/{id}',['as' => 'department', 'uses' => 'FrontendController@department']);

});





Route::group(array('prefix' => '/auth/home','middleware' => 'auth'), function()
{




    #if auth then home view
    #album
    Route::get('society-album', ['as' => 'albumFront', 'uses' => 'FrontendController@album']);
    Route::get('society-album/search/{id}', array('as' => 'albumFront.search', 'uses' => 'FrontendController@search'));
    Route::get('society-home',['as' => 'societyAuth', 'uses' => 'FrontendController@societyAuth']);
    Route::get('running-committee',['as' => 'currentCommittee', 'uses' => 'FrontendController@currentCommittee']);



    #User Section
	Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);
	Route::get('profile', ['as' => 'profile', 'uses' => 'UsersController@profile']);
	Route::put('profile/{id}', ['as' => 'profile.update', 'uses' => 'UsersController@profileUpdate']);
	Route::get('userProfile/{id}', ['as' => 'userProfile', 'uses' => 'UsersController@userProfile']);
	Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'Auth\AuthController@dashboard'));
	Route::get('change-password', array('as' => 'password.change', 'uses' => 'Auth\AuthController@changePassword'));
	Route::post('change-password', array('as' => 'password.doChange', 'uses' => 'Auth\AuthController@doChangePassword'));
	Route::get('user/students', array('as' => 'user.student', 'uses' => 'UsersController@students'));
	Route::get('user/teachers', array('as' => 'user.teacher', 'uses' => 'UsersController@teachers'));
	Route::get('user/waiting', array('as' => 'user.waiting', 'uses' => 'UsersController@deptWaitingUser'));
	Route::get('user/changeStatus/{id}', array('as' => 'user.changeStatus', 'uses' => 'UsersController@userChangeStatus'));
  //user admin
	Route::post('user/adminUserStore', array('as' => 'user.adminUserStore', 'uses' => 'UsersController@adminUserStore'));



	#Album Section
	Route::get('album', array('as' => 'album.index', 'uses' => 'AlbumController@index'));
	Route::get('album/search/{id}', array('as' => 'album.search', 'uses' => 'AlbumController@search'));
	Route::get('album/create', ['as'=>'album.create','uses' => 'AlbumController@create']);
	Route::post('album/create', ['as'=>'album.store','uses' => 'AlbumController@store']);
	#Route::get('album/{id}/edit', array('as' => 'album.edit', 'uses' => 'AlbumController@edit'));
	Route::post('album/update', array('as' => 'album.update', 'uses' => 'AlbumController@updateAlbumImage'));
	#Route::delete('album/{id}', array('as' => 'album.delete', 'uses' => 'AlbumController@destroy'));
	Route::delete('album/{id}', array('as' => 'photo.delete', 'uses' => 'AlbumController@photoDestroy'));



	#Event Section Complete
	Route::get('event/status/{id}', array('as' => 'event.status', 'uses' => 'EventController@statusUpdate'));
	Route::get('event', array('as' => 'event.index', 'uses' => 'EventController@index'));
	Route::get('event/create', array('as' => 'event.create', 'uses' => 'EventController@create'));
	Route::post('event', array('as' => 'event.store', 'uses' => 'EventController@store'));
	Route::get('event/{id}/edit', array('as' => 'event.edit', 'uses' => 'EventController@edit'));
	Route::put('event/{id}/update', array('as' => 'event.update', 'uses' => 'EventController@update'));
	Route::delete('event/{id}', array('as' => 'event.delete', 'uses' => 'EventController@destroy'));
	Route::get('event-file-upload', array('as' => 'event.eventFileUpload', 'uses' => 'EventController@fileUploadView')); #file upload dropdown view
	Route::post('eventFileUpload', array('as' => 'event.upload', 'uses' => 'EventController@fileUpload')); #file upload from dropdown event
	Route::post('eventsingleFileUpload', array('as' => 'event.singleUpload', 'uses' => 'EventController@singleFileUpload')); #for modal file upload



	#Society Section  Complete
	Route::get('society', array('as' => 'department.index', 'uses' => 'DepartmentController@activeSociety'));
	Route::get('society/inactive', array('as' => 'department.inactive', 'uses' => 'DepartmentController@inactiveSociety'));
	Route::get('society/statusChange/{id}', array('as' => 'department.statusChange', 'uses' => 'DepartmentController@statusChange'));
	Route::get('society/create', array('as' => 'department.create', 'uses' => 'DepartmentController@create'));
	Route::post('society', array('as' => 'department.store', 'uses' => 'DepartmentController@store'));
	Route::get('society/{id}/edit', array('as' => 'department.edit', 'uses' => 'DepartmentController@edit'));
	Route::put('society/{id}/update', array('as' => 'department.update', 'uses' => 'DepartmentController@update'));
	Route::delete('society/{id}', array('as' => 'department.delete', 'uses' => 'DepartmentController@destroy'));



	#Notice Section Complete
	Route::get('notice', array('as' => 'notice.index', 'uses' => 'NoticeController@index'));
	Route::get('notice/create', array('as' => 'notice.create', 'uses' => 'NoticeController@create'));
	Route::post('notice', array('as' => 'notice.store', 'uses' => 'NoticeController@store'));
	Route::get('notice/{id}/edit', array('as' => 'notice.edit', 'uses' => 'NoticeController@edit'));
	Route::put('notice/{id}/update', array('as' => 'notice.update', 'uses' => 'NoticeController@update'));
	Route::delete('notice/{id}', array('as' => 'notice.delete', 'uses' => 'NoticeController@destroy'));


	Route::get('notice-file-upload', array('as' => 'notice.noticeFileUpload', 'uses' => 'NoticeController@fileUploadView')); #file upload dropdown view
	Route::post('noticeFileUpload', array('as' => 'notice.upload', 'uses' => 'NoticeController@fileUpload')); #file upload from dropdown event
	Route::post('noticeingleFileUpload', array('as' => 'notice.singleUpload', 'uses' => 'NoticeController@singleFileUpload')); #for modal file upload



	#Committee Section Complete
	Route::get('committee', array('as' => 'committee.index', 'uses' => 'CommitteeController@index'));
	Route::get('committee/create', array('as' => 'committee.create', 'uses' => 'CommitteeController@create'));
	Route::post('committee', array('as' => 'committee.store', 'uses' => 'CommitteeController@store'));
	Route::get('committee/{id}/edit', array('as' => 'committee.edit', 'uses' => 'CommitteeController@edit'));
	Route::put('committee/{id}/update', array('as' => 'committee.update', 'uses' => 'CommitteeController@update'));
	Route::delete('committee/{id}', array('as' => 'committee.delete', 'uses' => 'CommitteeController@destroy'));
	Route::get('committee/{id}/show', array('as' => 'committee.show', 'uses' => 'CommitteeController@show'));


	#Committee Member Type
	Route::get('committeeMemberType', array('as' => 'committeeMemberType.index', 'uses' => 'CommitteeMemberTypeController@index'));
	Route::get('committeeMemberType/create', array('as' => 'committeeMemberType.create', 'uses' => 'CommitteeMemberTypeController@create'));
	Route::post('committeeMemberType', array('as' => 'committeeMemberType.store', 'uses' => 'CommitteeMemberTypeController@store'));
	Route::get('committeeMemberType/{id}/edit', array('as' => 'committeeMemberType.edit', 'uses' => 'CommitteeMemberTypeController@edit'));
	Route::put('committeeMemberType/{id}/update', array('as' => 'committeeMemberType.update', 'uses' => 'CommitteeMemberTypeController@update'));
	Route::delete('committeeMemberType/{id}', array('as' => 'committeeMemberType.delete', 'uses' => 'CommitteeMemberTypeController@destroy'));


	#Committee Member List
	Route::get('committeeMemberList', array('as' => 'committeeMemberList.index', 'uses' => 'CommitteeMemberListController@index'));
	Route::get('committeeMemberList/create', array('as' => 'committeeMemberList.create', 'uses' => 'CommitteeMemberListController@create'));
	Route::post('committeeMemberList', array('as' => 'committeeMemberList.store', 'uses' => 'CommitteeMemberListController@store'));
	Route::get('committeeMemberList/{id}/edit', array('as' => 'committeeMemberList.edit', 'uses' => 'CommitteeMemberListController@edit'));
	Route::put('committeeMemberList/{id}/update', array('as' => 'committeeMemberList.update', 'uses' => 'CommitteeMemberListController@update'));
	Route::delete('committeeMemberList/{id}', array('as' => 'committeeMemberList.delete', 'uses' => 'CommitteeMemberListController@destroy'));


	#Event Registration
	Route::get('event-registration', array('as' => 'registration.index', 'uses' => 'RegistrationController@index'));
	Route::get('event-registration/{id}/show', array('as' => 'registration.show', 'uses' => 'RegistrationController@show'));
	Route::post('event-registration/register', array('as' => 'registration.register', 'uses' => 'RegistrationController@register'));


	#Slider Image
	Route::get('slider', array('as' => 'slider.index', 'uses' => 'SliderController@index'));
	Route::get('slider/create', array('as' => 'slider.create', 'uses' => 'SliderController@create'));
	Route::post('slider', array('as' => 'slider.store', 'uses' => 'SliderController@store'));
	Route::delete('slider/{id}', array('as' => 'slider.delete', 'uses' => 'SliderController@destroy'));

});



//Api route
Route::get('api/section-dropdown', array('as' => 'apiroute', 'uses' => 'ApiController@sectionDropDownData'));







//	Route::get('test',function(){
//		return Auth::user();
//	});
























