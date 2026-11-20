<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama'=> 'Muhammad Dzaky Rabbani',
        'kelas'=> 'D4SM-48-01',
        'nim' => '707082400067',
    ]);
});

Route::view('/contact', 'pages.contact');

// route product memakai controller (data dari database)
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::post('/product', [ProductController::class, 'store']);

// ===== BARU (Modul 10) =====

// menampilkan detail data produk berdasarkan id tertentu
Route::get('/product/{id}', [ProductController::class, 'show']);

// menampilkan halaman form untuk merubah data
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);

// menyimpan data yang sudah dirubah pada form edit data
Route::put('/product/{id}', [ProductController::class, 'update']);

// menghapus data berdasarkan id yang kita pilih
Route::delete('/product/{id}', [ProductController::class, 'destroy']);

// routing resource controller untuk kategori produk
Route::resource('/category', CategoryController::class);