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

Route::get('/admina', function () {
    return view('welcome');
});
Route::prefix('admina')->group(function(){
    Route::get('/', 'AdminController@index');

    Route::group(['prefix' => 'category'], function(){
        Route::get('/', 'AdminCategoryController@index')->name('admin.get.list.category');
    });

});