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
/*return view('toppage')*/
Route::resource('/', 'viewControllers\routesController');
/*投稿された動画*/
/*return view('musiclist/Post_Page');*/
Route::resource('/postmovie', 'viewControllers\musiclist_Post_PageController');
/*動画詳細*/
/*return view('musiclist/playmusic/post-in')*/
/*Route::resource('/postmovie/in', 'viewControllers\musiclist_Post_Page_inController');*/
Route::get('/postmovie/in', function () {
    return view('musiclist/playmusic/post-in');
});

/*イベント*/
/*return view('eventlist/eventlist')*/
/*Route::resource('/event', 'EventController');*/
Route::resource('/event/eventRegistration', 'EventRegistrationController');
/*return view('artistlist/artistlist')*/
Route::resource('/artistlist', 'viewControllers\artistlistController');
/*return view('mypage.Mypage')*/
Route::resource('/mypage', 'viewControllers\mypageController');
/*return view('mypage.Mypage_Delete')*/
Route::resource('/mypage/Delete', 'viewControllers\mypage_DeleteController');
/*return view('mypage.Mypage_Music')*/
Route::resource('/mypage/Musicpost', 'viewControllers\mypage_MusicpostController');
/* return view('mypage.MypageConfig')*/
Route::resource('/mypage/MypageConfig', 'viewControllers\mypage_MypageConfigController');
/* other(Q&Aとか利用規約とか)*/
/*return view('other/q&a')*/
Route::resource('/q&a', 'viewControllers\q@aController');
/*return view('other/terms')*/
Route::resource('/terms', 'viewControllers\termsController');


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
