<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('beranda');
})->name('beranda');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/home', function () {
    return view('beranda');
})->name('beranda');
Route::get('/pengumuman', function () {
    return view('pengumuman');
})->name('pengumuman');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');