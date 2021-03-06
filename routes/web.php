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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'authWare'], function(){

// Route::get('post', 'PostController@index');
// Route::get('post/create', 'PostController@create');
// Route::get('post/{id}/show', 'PostController@show');
// Route::post('post', 'PostController@store');
// Route::get('post/{id}/edit', 'PostController@edit');

Route::resource('post', 'PostController');

});