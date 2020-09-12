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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/blogs','BlogController');
// Route::get ('/blogs/{id}', 'BlogController@show')->name('blogs.show');


Route::fallback(function () {
    return 'Error 404 In ur dreams';
    });
    