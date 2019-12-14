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
    return view('welcome');
});

Route::get('/gioi-thieu', function () {
    return "Hello <h1>Hello Minh </h1>Minh";
});
Route::get('/lien-he', function () {
    return "Contact us";
});

Route::post('/gioi-thieu', function () {
    return "Hello <h1>Hello</h1>";
});

// route Hiển thị màn hình hello
Route::get('/hello', 'ExampleController@hello')->name('hello');

// route Hiển thị màn hình gioithieubanthan
Route::get('/gioithieubanthan', 'ExampleController@gioithieubanthan')->name('gioithieubanthan');

// route Hiển thị màn hình hoctap/php
Route::get('/pages/hoctap/php', 'ExampleController@php')->name('hoctap/php');

// route Danh mục Sản phẩm
Route::resource('/admin/danhsachsanpham', 'SanPhamController');

// route Danh mục Sản phẩm
//Route::resource('/sanpham', 'SanPhamController');