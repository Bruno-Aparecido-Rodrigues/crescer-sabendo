<?php

use Illuminate\Support\Facades\Route;


// Paginas padrão
Route::get('/', function () {
    return view('user/index');
});
Route::get('/donates', function () {
    return view('user/doacoes');
});


// Ongs
Route::get('/account', function () {
    return view('user/ong/account');
});
Route::get('/courses', function () {
    return view('user/ong/courses');
});
Route::get('/mural', function () {
    return view('user/ong/mural');
});

Route::get('/vol', function () {
    return view('user/ong/volunteer');
});

// Registro e Login
Route::get('/signin', function () {
    return view('user/signIn');
});
Route::get('/signup', function () {
    return view('user/signUp');
});


// Admin
Route::get('/admin', function () {
    return view('admin/adminPage');
});
Route::get('/aprovarong', function () {
    return view('admin/aprovarOng');
});

