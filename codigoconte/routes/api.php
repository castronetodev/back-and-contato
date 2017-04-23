<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::group(['middleware' => 'cors'], function(){
    Route::post('login', 'Api\AuthController@login');
    Route::post('admin/registeradmin', 'Api\AuthController@registeradmin');
    Route::resource('contatos', 'Api\MenusController', ['except' => ['create', 'edit']]);
    Route::post('refresh_token', 'Api\AuthController@refreshToken');
    Route::get('app/cities', 'Api\CitiesController@index');
    Route::get('app/categories', 'Api\CategoriesController@index');
    Route::get('app/contacts/{category_id?}/{cities_id?}', 'Api\ContactsController@findOne');


    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::post('logout', 'Api\AuthController@logout');
		Route::resource('admin/cities', 'Api\CitiesController', ['except' => ['create', 'edit']]);
		Route::resource('admin/categories', 'Api\CategoriesController', ['except' => ['create', 'edit']]);
		Route::resource('admin/contacts', 'Api\ContactsController', ['except' => ['create', 'edit']]);        

    });
});