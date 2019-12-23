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
    return view('index');
});

Route::get('login', function () {
    return view('login');
});

Route::get('index', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('menu', function () {
    return view('menu');
});

Route::get('team', function () {
    return view('team');
});

Route::get('blog-home', function () {
    return view('blog-home');
});

Route::get('blog-single', function () {
    return view('blog-single');
});

Route::get('element', function () {
    return view('element');
});

Route::get('contact', function () {
    return view('contact');
});