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

// // route Hiển thị màn hình hello
// Route::get('/hello', 'ExampleController@hello')->name('hello');

// // route Hiển thị màn hình gioithieubanthan
// Route::get('/gioithieubanthan', 'ExampleController@gioithieubanthan')->name('gioithieubanthan');

// // route Hiển thị màn hình hoctap/php
// Route::get('/pages/hoctap/php', 'ExampleController@php')->name('hoctap/php');

// route Danh mục Sản phẩm
//tạo route xuất Biểu mẫu và In ấn Danh mục sản phẩm
Route::get('/admin/danhsachsanpham/print', 'SanPhamController@print')->name('danhsachsanpham.print');
Route::get('/admin/danhsachsanpham/excel', 'SanPhamController@excel')->name('danhsachsanpham.excel');
Route::resource('/admin/danhsachsanpham', 'SanPhamController');

// route Danh mục CHỦ ĐỀ
Route::resource('/admin/danhsachchude', 'ChuDeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/admin/activate/{nv_ma}', 'Backend\BackendController@activate')->name('activate');

// Thực hiện tạo giao diện trang chủ Frontend
Route::get('/', 'Frontend\FrontendController@index')->name('frontend.home');

//Thực hiện tạo giao diện trang Giới thiệu (about)
Route::get('/gioi-thieu', 'Frontend\FrontendController@about')->name('frontend.about');

//Thực hiện tạo giao diện trang Liên hệ (contact)
Route::get('/lien-he', 'Frontend\FrontendController@contact')->name('frontend.contact');

// tạo route sendMailContactForm
Route::post('/lien-he/goi-loi-nhan', 'Frontend\FrontendController@sendMailContactForm')->name('frontend.contact.sendMailContactForm');

//Tạo trang danh sách Sản phẩm (product)
Route::get('/san-pham', 'Frontend\FrontendController@product')->name('frontend.product');

//Tạo route cho phép chuyển đổi ngôn ngữ
Route::get('setLocale/{locale}', function ($locale) {
    if (in_array($locale, Config::get('app.locales'))) {
      Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('app.setLocale');