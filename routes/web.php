<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/tentang-kami', function () { 
    return view('tentang');
});

Route::get('/layanan', function () { 
    return view('layanan');
});

Route::get('/layanan/mesin-kantor', function () {
    return view('layanan.mesin-kantor');
});

Route::get('/layanan/komputer', function () {
    return view('layanan.komputer');
});

Route::get('/layanan/peralatan-listrik', function () {
    return view('layanan.peralatan-listrik');
});

Route::get('/layanan/software', function () {
    return view('layanan.software');
});

Route::get('/layanan/furniture', function () {
    return view('layanan.furniture');
});