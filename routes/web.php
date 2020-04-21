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

Route::get('/', 'HomeController@index')->name('home.index');

Route::get('/architecture', 'ArchiController@index')->name('archi.index');

Route::get('/event-decor', 'DecorController@index')->name('decor.index');

Route::get('/post', 'PostsController@index')->name('post.index');
Route::get('/post/{post}', 'PostsController@show')->name('post.show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
