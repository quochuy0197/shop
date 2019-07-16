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




Route::group(['namespace' => 'Login'], function () {
    Route::group(['prefix' => 'login','middleware' => 'CheckLogedIn'], function () {
        Route::get('','LoginController@getLogin');
        Route::post('','LoginController@postLogin');
    });
    
   
    
}); 
Route::group(['prefix' => 'home','middleware' => 'CheckLogedOut'], function () {
        Route::get('home','HomeController@getHome');
    });
Route::get('logout','HomeController@getLogout');

Route::group(['prefix' => 'admin'], function () { 
    Route::group(['prefix' => 'category'], function () {
        Route::get('','CategoryController@getCate');
        Route::post('','CategoryController@postCate');
        Route::get('edit/{id}','CategoryController@editCate');
        Route::post('edit/{id}','CategoryController@postEdit');
        Route::get('delete/{id}','CategoryController@deleteCate');
    });
});
Route::group(['namespace' => 'Admin'], function (){
    Route::group(['prefix' => 'product'], function () {
        Route::get('','ProductController@index');
        Route::get('add','ProductController@create');
        Route::post('add','ProductController@create');
    });
});
