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

Route::get('api/query/{table}/{id}/{columns}', 'APIController@update');
Route::get('api/query/{table}/{columns}', 'APIController@insert');

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

Route::prefix('api/students')->group( function(){
    //Get all
    Route::get('all','StudentController@all');
    //Get Single by id
    Route::get('get/{id}', 'StudentController@get');
    //Get all, certain columns, where
    Route::get('all/where/{condition}/{condition2?}', 'StudentController@all_where');
    //Get Single, certain columns, by condition col=value
    Route::get('get/{id}/where/{condition}/{condition2?}', 'StudentController@get_where');

    Route::get('/{condition?}/{condition2?}', 'StudentController@where');
});

Route::prefix('api/labpc')->group( function(){
    //Get all
    Route::get('all','LabPCController@all');
    //Get Single by id
    Route::get('get/{id}', 'LabPCController@get');
    //Get all, certain columns, where
    Route::get('all/where/{condition}/{condition2?}', 'LabPCController@all_where');
    //Get Single, certain columns, by condition col=value
    Route::get('get/{id}/where/{condition}/{condition2?}', 'LabPCController@get_where');

    Route::get('/{condition?}/{condition2?}', 'LabPCController@where');
});