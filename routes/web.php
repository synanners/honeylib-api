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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('api/logs')->group( function(){

    //Get all
    Route::get('all','LogController@all');
    //Get all, certain columns
    Route::get('all/columns/{columns}', 'LogController@all_columns');
    //Get all where
    Route::get('all/where/{condition}/{condition2?}', 'LogController@all_where');
    //Get all, certain columns, where
    Route::get('all/columns/{columns}/where/{condition}', 'LogController@all_columns_where');

    //Get Single by id
    Route::get('get/{id}', 'LogController@get');
    //Get Single, certain columns, by id
    Route::get('get/{id}/columns/{columns}', 'LogController@get_columns');
    //Get Single by condition col=value
    Route::get('get/{id}/where/{condition}/{condition2?}', 'LogController@get_where');
    //Get Single, certain columns, by condition col=value
    Route::get('get/{id}/columns/{columns}/where/{condition}', 'LogController@get_columns_where');

});
