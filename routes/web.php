<?php

use App\Post;

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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/posts', 'PostsController@index')
    ->name('posts.index')
    ;

    Route::get('/posts/create', 'PostsController@create')
    ->name('posts.create')
   
    ;

    Route::post('/posts', 'PostsController@store')
    ->name('posts.store')
    ;

    Route::get('/posts/{post}/edit', 'PostsController@edit')
    ->name('posts.edit')
    ;
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');