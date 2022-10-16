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
//Route::group(['middleware'=>['auth']], function(){
Route::get('/','PostController@index');

Route::get('/user/{user}/question','UserController@question')->middleware('isQuestion');

Route::get('/profile/{user}','UserController@profile');
Route::get('/team/want','TeamController@team_wanted');
Route::get('/team/want/post','TeamController@team_post');
Route::get('/opponent/want','OpponentController@opponent_wanted');
Route::get('/opponent/want/post','OpponentController@opponent_post');
Route::get('/team/profile/{team}','TeamController@profile');

//Route::post('/user','UserController@store_user');
Route::post('/team','TeamController@store_team');
Route::post('/opponent','OpponentController@store_opponent');

Route::put('/user/{user}','UserController@store_user');
Route::put('/storeteam','UserController@team');



Auth::routes();
Route::get('/home','HomeController@index')->name('home');