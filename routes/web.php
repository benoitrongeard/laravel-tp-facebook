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
    //TODO modifier l'accueil sur le controller page pour afficher le fil d'actualité
    Route::get('/', 'HomeController@newsFeed')->name('news-feed');
});
