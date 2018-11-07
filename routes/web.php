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

Auth::routes();

Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('/profile', ['as' => 'profile', 'uses' => 'ProfileController@index']);
Route::post('/profile', 'ProfileController@store');
Route::get('/catalog', ['as' => 'catalog', 'uses' => 'CatalogController@index']);
Route::get('/catalog/croissant', ['as' => 'catalog/croissant', 'uses' => 'CatalogController@getDataCroissant']);
Route::get('/catalog/decroissant', ['as' => 'catalog/decroissant', 'uses' => 'CatalogController@getDataDecroissant']);
Route::get('/coffret',['as' => 'coffret', 'uses' => 'CoffretController@index']);
