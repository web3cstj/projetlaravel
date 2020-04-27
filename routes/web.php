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
Route::get('/users', "UserController@index");
Route::get('/users/{user}', "UserController@show")->where(['user'=>'[0-9]+']);
Route::get('/posts', "PostController@index");
Route::get('/posts/{post}', "PostController@show")->where(['post'=>'[0-9]+']);
