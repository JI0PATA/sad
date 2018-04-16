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

        Route::get('edit/{id}', 'NewsController@edit')->name('editNews');
        Route::post('update/{id}', 'NewsController@update')->name('updateNews');

        Route::get('delete/{id}', 'NewsController@delete')->name('deleteNews');
    });

    Route::prefix('reviews')->group(function() {
       Route::get('/', 'ReviewController@index')->name('reviews');

       Route::get('active/{id}', 'ReviewController@active')->name('activeReview');

       Route::get('block/{id}', 'ReviewController@block')->name('blockReview');

       Route::get('delete/{id}', 'ReviewController@delete')->name('deleteReview');
    });

    Route::prefix('album')->group(function() {
       Route::get('/', 'AlbumController@index')->name('albums');

       Route::get('add', 'AlbumController@add')->name('addAlbum');
       Route::post('create', 'AlbumController@create')->name('createAlbum');

       Route::get('edit/{id}', 'AlbumController@edit')->name('editAlbum');
       Route::post('update/{id}', 'AlbumController@update')->name('updateAlbum');

       Route::get('delete/{id}', 'AlbumController@delete')->name('deleteAlbum');

       Route::get('photos/{id}', 'AlbumController@photos')->name('photosInAlbum');

       Route::post('uploadPhotos/{id}', 'AlbumController@uploadPhotos')->name('uploadPhotos');
    });

    Route::prefix('photos')->group(function() {
        Route::get('delete/{id}', 'PhotoController@delete')->name('deletePhoto');
    });

});

Route::get('news', 'NewsController@getAllNews')->name('getNews');

Route::post('callback', 'HomeController@callback')->name('callback');