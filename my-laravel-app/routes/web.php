<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/toko', function () {
    return view('toko.index');
});

Route::get('/keranjang', function () {
    return view('keranjang.index');
});

Route::get('/profil', function () {
    return view('profil.index');
});