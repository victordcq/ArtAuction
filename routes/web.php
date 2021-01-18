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
    return redirect(URL::to('/items'));
});

// ITEMCONTROLLER
Route::get('/items', 'ItemController@overview');
//filter
Route::post('/items', 'ItemController@overview');

Route::get('/items/{id}', 'ItemController@detail')->where('id', '[0-9]+');

Route::get('/items/{id}/offers', 'ItemController@offers')->where('id', '[0-9]+');

//USERCONTROLLER
Route::get('/users', 'UserController@overview');

Route::get('/users/{id}', 'UserController@detail')->where('id', '[0-9]+'); 

Route::get('/users/{id}/items', 'UserController@items')->where('id', '[0-9]+');

//INFOCONTROLLER
Route::get('/about', 'InfoController@about');

Route::get('/categories', 'InfoController@categories');

Route::get('/categories/{id}', 'InfoController@detail')->where('id', '[0-9]+');


Route::get('/admin', function(){
    return redirect(URL::to('/admin/items'));
});
//ADMINCONTROLLER
Route::prefix('/admin')->group(function () {
    Route::get('/items', 'AdminController@overview');

    Route::get('/item/{id}/offer', 'AdminController@showFormOffer')->where('id', '[0-9]+');
    Route::post('/item/{id}/offer', 'AdminController@offer')->where('id', '[0-9]+');

    Route::get('/items/create', 'AdminController@showFormCreate');
    Route::post('/items/create', 'AdminController@create');
    
    Route::get('/items/{id}/update', 'AdminController@showFormUpdate')->where('id', '[0-9]+');
    Route::post('/items/{id}/update', 'AdminController@update')->where('id', '[0-9]+');
    
    Route::post('/items/delete', 'AdminController@delete');
});

Auth::routes();

