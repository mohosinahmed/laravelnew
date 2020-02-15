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

// home
Route::get('/', 'helloController@index');

// category
Route::get('add/category', 'boloController@addCategory')->name('add.category');
Route::get('store/category', 'boloController@storeCategory')->name('store.category');
Route::get('all/category', 'boloController@allCategory')->name('all.category');
Route::get('view/category/{id}', 'boloController@viewCategory');
Route::get('delete/category/{id}', 'boloController@deleteCategory');
Route::get('edit/category/{id}', 'boloController@editCategory');
Route::get('update/category/{id}', 'boloController@updateCategory');

// posts
Route::get('write/post', 'PostController@writePost')->name('write.post');
Route::post('store/post', 'PostController@storePost')->name('store.post');
Route::get('all/post', 'PostController@allPost')->name('all.post');
Route::get('edit/post/{id}', 'PostController@editPost');
Route::post('update/post/{id}', 'PostController@updatePost');
Route::get('view/post/{id}', 'PostController@showPost');

// student
Route::get('students', 'studentController@create')->name('students');
Route::post('store/student', 'studentController@storeStudent')->name('store.student');
Route::get('all/students', 'studentController@index')->name('all.students');