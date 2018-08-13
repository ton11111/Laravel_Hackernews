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

/*
Route::get('/', function () {
    return view('test');
});
*/

Route::get('/', function () {
    return view('flask_test');
});



Route::get('/search-keyword', 'KeywordController@search');
Route::get('/test', 'KeywordController@search');
/*
Route::get('/test', function () {
    return view('flask_test');
});
*/

/*
Route::get('/tmp', function () {
    return view('welcome');
});
*/