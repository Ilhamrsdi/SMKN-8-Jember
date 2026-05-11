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

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');

Route::get('/jurusan', function () {
    return view('jurusan');
})->name('jusuran');



Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');


Route::get('/pengumuman', function () {

    return view('pengumuman');
})->name('pengumuman');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

    return view('penguman');
})->name('pengumuman');

