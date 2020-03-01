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
    return view('home');
});

Route::get('/enterprises', function () {
    return view('enterprises');
});

Route::get('/turista', function () {
    return view('turista');
});

Route::get('/myEnterprise', function () {
    return view('myEnterprise');
});

Route::get('/touristRoute', function () {
    return view('touristRoute');
});

