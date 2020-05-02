<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/installer', "AppController@installer");
Route::get('/', "UserController@index");
Route::group(['prefix'=>'users', 'where'=>['user'=>'[0-9]+']], function () {
    Route::get('/', "UserController@index");
    Route::get('/create', "UserController@create");
    Route::post('/create', "UserController@store");
    Route::get('/{user}', "UserController@show");
    Route::get('/{user}/edit', "UserController@edit");
    Route::post('/{user}edit', "UserController@update");
    Route::get('/{user}/delete', "UserController@delete");
    Route::post('/{user}delete', "UserController@destroy");
});
Route::group(['prefix'=>'posts', 'where'=>['post'=>'[0-9]+']], function () {
    Route::get('/', "PostController@index");
    Route::get('/create', "PostController@create");
    Route::post('/', "PostController@store");
    Route::get('/{post}', "PostController@show");
    Route::get('/{post}/edit', "PostController@edit");
    Route::post('/{post}/edit', "PostController@update");
    Route::get('/{post}/delete', "PostController@delete");
    Route::post('/{post}/delete', "PostController@destroy");
});
