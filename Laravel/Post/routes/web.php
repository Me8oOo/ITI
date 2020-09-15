<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('/', function () {
    return view('welcome');
});

Route::group([], function () {
    Route::get('/home/user/{user}', 'PostController@show')->name('user.show');
    Route::get('/home', 'PostController@index')->name('home');
    Route::resource('/home/post', 'PostController')->middleware('auth');
});

Route::middleware('auth')->group(function () {
    Route::resource('Post', 'PostController');
    Route::resource('/home/user', 'PostController')->except(['update', 'show', 'destroy', 'edit']);
    Route::put('/home/user/{user}', 'PostController@update')->name('user.update');
    Route::delete('/home/user/{user}', 'PostController@destroy')->name('user.destroy');
    Route::get('/home/user/{user}/edit', 'PostController@edit')->name('user.edit');
});




Auth::routes();


Route::fallback(function () {
    return 'Error In ur dreams';
});
