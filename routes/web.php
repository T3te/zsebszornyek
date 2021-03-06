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

Route::get('admin', 'PagesController@getAdmin');
Route::get('blog', 'PagesController@getBlog');
Route::get('/', 'PagesController@getIndex');
Route::resource('admin/blog', 'AdminBlogController');