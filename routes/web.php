<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/jurusan', function () {
    return view('jurusan');
})->name('jusuran');
Route::get('/berita', function () {
    return view('berita');
})->name('berita');
