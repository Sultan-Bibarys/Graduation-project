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

Route::get('/template', function(){
    return view('template');
});

Auth::routes();

Route::get('/',function(){
    return view('welcome');
});

Route::group(['namespace' => 'Posts'], function(){
    Route::get('/post_show','PostController@post_show')->name('post_show');
    Route::get('/post_show1','PostController@post_show1')->name('post_show1');
    Route::get('/post_show2','PostController@post_show2')->name('post_show2');
    Route::get('/post_show3','PostController@post_show3')->name('post_show3');
    Route::get('/post_show4','PostController@post_show4')->name('post_show4');
    Route::get('/post_show5','PostController@post_show5')->name('post_show5');
    Route::get('/post_show6','PostController@post_show6')->name('post_show6');
    Route::get('/post_show7','PostController@post_show7')->name('post_show7');
    Route::get('/post_show8','PostController@post_show8')->name('post_show8');
    Route::get('/post_show9','PostController@post_show9')->name('post_show9');
    Route::get('/create_post','PostController@post_create')->name('create_post');
});

Route::group(['namespace' => 'Main'], function() {
    Route::get('/main', 'IndexController')->name('main');
});


