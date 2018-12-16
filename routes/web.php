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

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', 'PageController@newsFeed')->name('news-feed');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/annuaire', 'UserController@index')->name('directory');
    Route::resource('users', 'UserController');
    Route::post('/users/{users}/friends', 'UserController@storeFriend')->name('users.friends.store');
    Route::resource('messages', 'MessageController', ['only' => ['store', 'destroy']]);
    Route::post('messages/{messages}/like', 'MessageController@like')->name('messages.likes.store');
    Route::resource('messages.comments', 'CommentController', ['only' => ['store', 'destroy']]);
    Route::post('messages/{messages}/comments/{comments}/like', 'CommentController@like')->name('   comments.likes.store');
});
