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
    return 'hello';
});

Route::get('/projects','EntryJSONController@index');
Route::get('/projects/{slug}','EntryJSONController@show');

Route::get('/pages','PagesJSONController@index');
Route::get('/pages/{slug}','PagesJSONController@show');

Route::get('/sections','SectionJSONController@index');
Route::get('/sections/{slug}','SectionJSONController@filterProjects');
