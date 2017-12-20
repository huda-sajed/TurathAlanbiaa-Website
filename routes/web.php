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
    return view('main.main_page');
});

Route::get('/all-news', function () {
    return view('main.all_news');
});
Route::get('/title', function () {
    return view('main.title');
});
