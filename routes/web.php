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
    //return view('welcome');
    return view('vidol.include.html5', ['title' => '首頁']);
});
Route::get('/header', function () {
    //return view('welcome');
    return view('vidol.include.header', ['title' => '首頁']);
});
Route::get('/phpinfo', function () {
    phpinfo();
});
