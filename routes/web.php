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

Route::get('/', 'HomeController@index')->name('home');


Route::get('login', 'Auth\LoginController@showLoginForm')->middleware('LoginAdmin')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login')->middleware('AuthAdmin');
Route::get('logout', 'AdminController@logout')->name('logout');


Route::prefix('admin')->middleware('AdminPanel')->group(function() {

    Route::get('/', 'AdminController@index')->name('admin');

    Route::prefix('slides')->group(function() {
        Route::get('add', 'SlideController@add')->name('addSlide');
        Route::post('create', 'SlideController@create')->name('createSlide');

        Route::get('edit/{id}', 'SlideController@edit')->name('editSlide');
        Route::post('update/{id}', 'SlideController@update')->name('updateSlide');

        Route::get('delete/{id}', 'SlideController@delete')->name('deleteSlide');
    });

    Route::prefix('mentors')->group(function() {
        Route::get('/', 'MentorController@index')->name('mentors');

        Route::get('add', 'MentorController@add')->name('addMentor');
        Route::post('create', 'MentorController@create')->name('createMentor');

        Route::get('edit/{id}', 'MentorController@edit')->name('editMentor');
        Route::post('update/{id}', 'MentorController@update')->name('updateMentor');

        Route::get('delete/{id}', 'MentorController@delete')->name('deleteMentor');
    });

    Route::prefix('news')->group(function() {
        Route::get('/', 'NewsController@index')->name('news');

        Route::get('add', 'NewsController@add')->name('addNews');
        Route::post('create', 'NewsController@create')->name('createNews');
    });

});