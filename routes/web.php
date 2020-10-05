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
  
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

// pages   
Route::get('/page/about', 'PageController@about');

// Social Login 
Route::get('auth/social', 'Auth\LoginController@show')->name('social.login');
Route::get('oauth/{driver}', 'Auth\LoginController@redirectToProvider')->name('social.oauth');
Route::get('oauth/{driver}/callback', 'Auth\LoginController@handleProviderCallback')->name('social.callback');

// profile routes
Route::get('user/about', 'ProfileController@about');
Route::get('user/main', 'ProfileController@main');
Route::get('user/photos', 'ProfileController@photos');
Route::get('user/friends', 'ProfileController@friends');
Route::get('user/feed', 'ProfileController@feed');
Route::get('user/settings', 'ProfileController@settings');

