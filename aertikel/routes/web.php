<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Static converted pages
Route::view('/login', 'login');
Route::view('/author', 'author');
Route::view('/gayahidup', 'gayahidup');
Route::view('/olahraga', 'olahraga');
Route::view('/kesehatan', 'kesehatan');
Route::view('/politik', 'politik');
Route::view('/pariwisata', 'pariwisata');
Route::view('/detail-MotoGp', 'detail-MotoGp');
Route::view('/semuaberita', 'semuaberita');
Route::view('/hasilpencarian', 'hasilpencarian');
Route::view('/register', 'register');
