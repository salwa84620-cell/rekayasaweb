<?php


use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

Route::get('/barang', [BarangController::class, 'index']);

route::get('/barang/create', [BarangController::class, 'create']);

route::post('/barang', [BarangController::class, 'store']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
    $nama = 'Salwa Syarika';
    $profesi = 'Mahasiswa';
    $nim = '251011700797';
    $jurusan = 'SI';

    return view('profile', compact('nama', 'profesi', 'nim', 'jurusan'));
});

Route::get('/nilai', function () {
    $nilai = 85;

    return view('nilai', compact('nilai'));
});

Route::get('/profil', function () {
    $barang = [
        'Laptop',
        'Mouse',
        'Keyboard',
        'Headset'
    ];

    return view('barang', compact('barang'));
});