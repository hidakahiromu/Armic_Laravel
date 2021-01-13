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

/*投稿された動画*/
/*return view('musiclist/Post_Page');*/
Route::get('/postmovie', 'viewControllers\musiclist_Post_PageController@index');

/*動画詳細*/
/*return view('musiclist/playmusic/post-in')*/
Route::get('/postmovie/in', 'viewControllers\musiclist_Post_PageController@index2');
/*Route::get('/postmovie/in', function () {
    return view('musiclist/playmusic/post-in');
});/


/*return view('eventlist/eventlist')*/
Route::get('/event', 'EventController@index');


/*Route::resource('/event', 'EventController');*/
Route::resource('/event/eventRegistration', 'EventRegistrationController');

/*return view('artistlist/artistlist')*/
Route::resource('/artistlist', 'viewControllers\artistlistController');


/*return view('mypage.Mypage')*/
Route::get('/mypage', 'viewControllers\mypageController@index');

/*return view('mypage.Mypage_Delete')*/
Route::get('/mypage/Delete', 'viewControllers\mypageController@index2');

/*return view('mypage.Mypage_Music')*/
Route::get('/mypage/Musicpost', 'viewControllers\mypageController@index3');

/* return view('mypage.MypageConfig')*/
Route::get('/mypage/artistname', 'viewControllers\mypageController@index4');

/*アーティスト関連*/
Route::get('/artistlist', function () {
    return view('artistlist/artistlist');
});

Route::get('/artistlist/artistlistRegistration', 'artistlistRegistrationController@index');
Route::post('/artistlist/artistlistFinish', 'artistlistRegistrationController@create');
/*Route::post('/artistlist/artistlistRegistration', 'artistlistRegistrationController@create');*/
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
