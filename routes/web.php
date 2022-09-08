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
Route::get('/question','PostController@question');
Route::get('/weapon/create','PostController@weapon');
Route::get('/profile/{user}','PostController@profile');
Route::get('/team/want','PostController@team_wanted');
Route::get('/team/want/post','PostController@team_post');


Route::post('/weapon', 'PostController@store_weapon');
Route::post('/user','PostController@store_user');
Route::post('/team','PostController@store_team');

Auth::routes();
Route::get('/home','HomeController@index')->name('home');