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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'FrontController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('post');

Route::post('/savepost','PostController@save')->name('savepost');

Route::get('/publish/{id}','PostController@Published');
Route::get('/unpublish/{id}','PostController@unPublished');

Route::get('/single/{id}','FrontController@SinglePost')->name('single');
