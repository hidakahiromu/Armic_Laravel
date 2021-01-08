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
Route::get('/postmovie/in', function () {
    return view('musiclist/playmusic/post-in');
});

/*イベント*/
Route::get('/event', function () {
    return view('eventlist/eventlist');
});
Route::get('/artistlist', function () {
    return view('artistlist/artistlist');
});

Route::get('/mypage', function () {
    return view('mypage.Mypage');
});
Route::get('/mypage/Delete', function () {
    return view('mypage.Mypage_Delete');
});

Route::get('/mypage/Musicpost', function () {
    return view('mypage.Mypage_Music');
});
Route::get('/mypage/artistname', function () {
    return view('mypage.MypageConfig');
});

/* other(Q&Aとか利用規約とか)*/
Route::get('/q&a', function () {
    return view('other/q&a');
});
Route::get('/terms', function () {
    return view('other/terms');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/event', 'EventController@index')->name('event');

/*
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/
