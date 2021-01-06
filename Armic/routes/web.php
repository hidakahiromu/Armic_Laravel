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
/*toppage*/

Route::get('/', function () {
    return view('toppage');
});
/*投稿された動画*/
Route::get('/postmovie', function () {
    return view('musiclist/Post_Page');
});
/*動画詳細*/
Route::get('/in', function () {
    return view('musiclist/playmusic/post-in');
});
/*イベント*/
Route::get('/event', function () {
    return view('eventlist/eventlist');
});
Route::get('/artistlist', function () {
    return view('artistlist/artistlist');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/
