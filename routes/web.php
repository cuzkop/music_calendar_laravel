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
    return view('welcome');
});

//Calendar関連
Route::get('/hello', 'Calendar\CalendarController@index');
Route::get('/getCalendar', 'Calendar\CalendarController@getCalendar');
Route::get('/calendarUpdate', 'Calendar\CalendarController@update');

//フォロー関連
Route::get('/follow', 'Follow\FollowController@index');
Route::get('/followArtist', 'Follow\FollowController@result');
Route::get('/followDone', 'Follow\FollowController@follow');

//Master関連
Route::get('/masterArtist', 'Master\MasterController@index');
Route::get('/insertArtist', 'Master\MasterController@insertArtist');
Route::get('/insertEvent', 'Master\MasterController@insertEvent');

//nortification関連
Route::get('/nortification', 'Nortification\NortificationController@index');
Route::get('/update', 'Nortification\NortificationController@update');

//user関連
Route::get('/userInfo', 'User\UserController@getInfo');
Route::get('/followUpdate', 'User\UserController@update');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
