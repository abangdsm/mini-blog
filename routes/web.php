<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "judul" => "Home - Beranda"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "judul" => "About - Tentang Saya"
    ]);
});
