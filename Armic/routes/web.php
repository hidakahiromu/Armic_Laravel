<?php

use Illuminate\Http\Request;

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

Route::get('/tutorial', function () {
    return view('Tutorial');
});

/*投稿された動画*/
/*return view('musiclist/Post_Page');*/
Route::get('/postmovie', 'viewControllers\musiclist_Post_PageController@index');

/*動画詳細*/
/*return view('musiclist/playmusic/post-in')*/
Route::post('/postmovie/in', 'viewControllers\musiclist_Post_PageController@index2');




/*return view('eventlist/eventlist')*/
Route::get('/event', 'EventController@index');


/*Route::resource('/event', 'EventController');*/
Route::resource('/event/eventRegistration', 'EventRegistrationController');


/*マイページ*/
/*return view('mypage.Mypage')*/
Route::get('/mypage', 'viewControllers\mypageController@index');
Route::post('/mypage', 'postController@create');

/*return view('mypage.Mypage_Delete')*/
Route::get('/mypage/Delete', 'viewControllers\mypageController@index2');

/*return view('mypage.Mypage_Music')*/
Route::get('/mypage/Musicpost', 'viewControllers\mypageController@index3');

/* return view('mypage.MypageConfig')*/
Route::get('/mypage/artistname', 'viewControllers\mypageController@index4');

/*アーティスト関連*/
/*return view('artistlist/artistlist')*/
Route::get('/artistlist', 'viewControllers\artistlistController@index');

Route::get('/artistlist/artistlistRegistration', 'artistlistRegistrationController@index');

Route::post('/artistlist', 'artistlistRegistrationController@create');

/* other(Q&Aとか利用規約とか)*/
/*return view('other/q&a')*/
Route::resource('/q&a', 'viewControllers\q_aController');

/*return view('other/terms')*/
Route::resource('/terms', 'viewControllers\termsController');

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
