<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});


Route::get('/karyawan', function () {
    return view('karyawan');
});

Route::get('/keuangan', function () {
    return view('keuangan');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/transaksi', function () {
    return view('transaksi');
});

Route::get('/masuk', function () {
    return view('sign-in');
});

Route::get('/daftar', function () {
    return view('sign-up');
});
