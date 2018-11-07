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
Route::get('/coffret',['as' => 'coffret', 'uses' => 'CoffretController@index']);
Route::get('/coffret/{id_coffret}', 'CoffretController@afficher');
Route::get('/createBox', ['as' => 'createBox', 'uses' => 'CreateBoxController@index']);
Route::post('/createBox', ['as' => 'createBox', 'uses' => 'CreateBoxController@addBox']);