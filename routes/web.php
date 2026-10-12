<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'home']);
Route::get('/layanan', [PageController::class, 'layanan']);

Route::get('/tentang-kami', function () {
    return view('tentang');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/home-test', function () {
    return view('home-test');
});



// Rute Detail Layanan
Route::get('/layanan/mesin-kantor', function () { return view('layanan.mesin-kantor'); });
Route::get('/layanan/komputer', function () { return view('layanan.komputer'); });
Route::get('/layanan/peralatan-listrik', function () { return view('layanan.peralatan-listrik'); });
Route::get('/layanan/software', function () { return view('layanan.software'); });
Route::get('/layanan/furniture', function () { return view('layanan.furniture'); });