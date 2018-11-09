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

/* Home page */
Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);

/* Profile of the user */
Route::get('/profile', ['as' => 'profile', 'uses' => 'ProfileController@index']);
Route::get('/profile/{id_coffret}', 'ProfileController@deleteBox');
Route::post('/profile', 'ProfileController@store');

/* Coffrets of the user */
Route::get('/coffret',['as' => 'coffret', 'uses' => 'CoffretController@index']);
Route::get('/coffret/{id_coffret}', 'CoffretController@afficher');
Route::post('/coffret/{id_coffret}', 'CoffretController@modifier');
/* Delete a coffret */
Route::get('/coffret/suppr/{id_coffret}/{id_prestation?}', 'CoffretController@delete');
/* Validate a coffret */
Route::get('/coffret/coffretValidate/{id_coffret}' ,[ 'as'=>'validate','uses'=>'CoffretController@coffretValidate']);
Route::post('/coffret/coffretValidate/{id_coffret}' ,[ 'as'=>'validate','uses'=>'CoffretController@coffretValidatePost']);
/* Create a coffret */
Route::get('/createBox', ['as' => 'createBox', 'uses' => 'CreateBoxController@index']);
Route::post('/createBox', ['as' => 'createBox', 'uses' => 'CreateBoxController@addBox']);

/* Catalog of GiftBox */
Route::get('/catalog/{type?}', ['as' => 'catalog', 'uses' => 'CatalogController@index']);
Route::get('/catalog/category/{cat_id}/{type?}', ['as' => 'category', 'uses' => 'CatalogController@indexByCat']);
Route::post('/catalog', ['as' => 'catalog', 'uses' => 'CatalogController@addPresta']);

/* One gift of the catalog */
Route::get('/gift/{id}',['as' => 'gift', 'uses' => 'GiftController@index']);
Route::get('/gift/{id}/wp',['as' => 'gift', 'uses' => 'GiftController@wp']);
Route::post('/coffret/{id_coffret}', 'CoffretController@modifier');
Route::get('/coffret/suppr/{id_coffret}/{id_prestation?}', 'CoffretController@delete');
Route::get('/profile/{id_coffret}', 'ProfileController@deleteBox');


Route::get('/coffret/valid/{id_coffret}' ,[ 'as'=>'validate','uses'=>'CoffretController@validateBox']);

/* Open a coffret */
Route::get('/ouvrirCoffret/{sha1}', ['as' => 'ouvrirCoffret', 'uses' => 'OpenCoffretController@index']);
Route::get('/ouvrirCoffret/{sha1}/confirm', ['as' => 'ouvrirCoffret', 'uses' => 'OpenCoffretController@confirm']);
Route::post('/ouvrirCoffret/{sha1}/confirm', ['as' => 'ouvrirCoffret', 'uses' => 'OpenCoffretController@message']);

Route::redirect('/','/home');


Route::get('/test', function(){
    return view('test');
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', 'AdminController@index');
    Route::get('/addGift', 'AdminController@showAddGift');
    Route::post('/addGift', 'AdminController@addGift');
    Route::post('/admin/delete', 'AdminController@deleteGift')->name("deleteGift");
    Route::post('/admin/active', 'AdminController@changeActive')->name('active');
});
