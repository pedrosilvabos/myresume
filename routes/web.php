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

Route::get('/', function(){
  return view('profile');
});
Route::get('/Portfolio', function(){
  return view('portfolio');
});

Route::get('/rubyonrails', 'RubyonrailsController@index')->name('rorHome');
Route::get('/javascript', 'JavascriptController@index')->name('jsHome');
Route::get('/php', 'PhpController@index')->name('phpHome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
