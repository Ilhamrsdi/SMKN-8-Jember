<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('beranda');
})->name('beranda');

Route::get('/profil', function () {
    return view('profile');
})->name('profile');
