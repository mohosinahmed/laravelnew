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

Route::get('/', function () {
    return view('pages.index');
});

//Route::get('contact/us', 'helloController@contact')->name('contact')
//Route::get('about/us', 'helloController@about')->name('about')

Route::get('write/post', 'boloController@writePost')->name('write.post');

Route::get('add/category', 'boloController@addCategory')->name('add.category');
Route::get('store/category', 'boloController@storeCategory')->name('store.category');



Route::get('all/category', 'boloController@allCategory')->name('all.category');
Route::get('view/category/{id}', 'boloController@viewCategory');
Route::get('delete/category/{id}', 'boloController@deleteCategory');
Route::get('edit/category/{id}', 'boloController@editCategory');
Route::get('update/category/{id}', 'boloController@updateCategory');