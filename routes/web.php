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

Route::get('/', function () {
    return view('auth.register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'role:admin']],
    function () {
        Route::resource('admin', 'adminController');
    });

Route::group(['middleware' => ['auth', 'role:admin']],
    function () {
        Route::get('adminIndex', 'adminController@index')->name('adminIndex');
        Route::get('adminShow/{user_id}', 'adminController@show')->name('adminShow');
        Route::get('adminAccept/{user_id}', 'adminController@adminAccept')->name('adminAccept');
        Route::get('adminUnread/{user_id}', 'adminController@adminUnread')->name('adminUnread');
        Route::get('adminReject/{user_id}', 'adminController@adminReject')->name('adminReject');
        Route::get('status', 'adminController@Status')->name('adminStatus');
        Route::get('accept', 'adminController@accept')->name('accept');
        Route::get('reject', 'adminController@reject')->name('reject');
    });

Route::resource('resume', 'ResumeController');

Route::group(['middleware' => ['auth', 'role:employee']], function () {
    // Route::get('user/{id}', 'ResumeController@index')->name('user');
    // Route::post('user', 'ResumeController@store')->name('user.cv');
    // Route::get('user/{user}/cv', 'ResumeController@show')->name('user.cv');
    // Route::post('user/{user}/upload', 'ResumeController@upload')->name('user.upload');

    Route::get('userIndex/{id}', 'ResumeController@index')->name('userIndex');
    // Route::post('userStore/{id}', 'ResumeController@store')->name('userStore');
    Route::get('userEdit/{id}', 'ResumeController@edit')->name('userEdit');
    Route::put('userUpdate/{id}', 'ResumeController@update')->name('userUpdate');
    Route::get('statusCV/{id}', 'ResumeController@statuscv')->name('statusCV');
});
