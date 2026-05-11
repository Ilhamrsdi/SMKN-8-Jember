<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
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
    return view('penguman');
})->name('pengumuman');

