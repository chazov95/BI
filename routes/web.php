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

Route::get('/', 'IndexController@index');
/*Route::get('/login', 'IndexController@index');
Route::get('/confirm', 'IndexController@index');
Route::get('/registration', 'IndexController@index');
Route::get('/{companyName}', 'IndexController@index');
Route::get('/{companyName}/users', 'IndexController@index');
Route::get('/{companyName}/tasks', 'IndexController@index');
Route::get('/{companyName}/search', 'IndexController@index');
Route::get('/{companyName}/dot/{id}', 'IndexController@index');
Route::get('/{companyName}/add/chart', 'IndexController@index');
Route::get('/{companyName}/dot/{id}/edit', 'IndexController@index');*/




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


