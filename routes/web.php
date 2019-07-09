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

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'category'], function () {
        Route::get('','CategoryController@getCate');
        Route::post('','CategoryController@postCate');
        Route::get('edit/{id}','CategoryController@editCate');
        Route::post('edit/{id}','CategoryController@postEdit');
        Route::get('delete/{id}','CategoryController@deleteCate');
    });
});
