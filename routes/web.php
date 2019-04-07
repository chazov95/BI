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
Route::get('/registerCompany', 'IndexController@registerCompany')->name('registerCompany');
Route::get('/company/{id}/edit', 'IndexController@editCompany')->name('editCompany');



Auth::routes();

Route::get('/companies/my', 'HomeController@index')->name('home');
Route::get('/companies/{id}/idea', 'HomeController@idea')->name('idea');
Route::get('/companies/all', 'HomeController@all')->name('allCompanies');
Route::get('/companies/{id}', 'CompanyController@companyHome')->name('companyHome');

