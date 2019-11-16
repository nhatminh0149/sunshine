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
