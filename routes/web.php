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

Route::get('/', 'HomeController@index');
Route::resource('/home', 'HomeController');


Route::resource('/sitters', 'SittersController');


Route::resource('/parents', 'ParentsController');

Route::resource('/register/index', 'RegistersController');

Route::get('/register/create/', 'RegistersController@create');

Route::get('/register/create/sitter', 'SittersController@create');
Route::get('/register/create/parents', 'ParentsController@create');

