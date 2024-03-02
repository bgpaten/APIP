<?php

use App\Http\Controllers\BarangmasukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PinjamController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user', function () {
//     return "Anda USER Aplikasi";
// })->middleware('auth')->name('user');


// // jalur redirect kalau usernya role admin
// Route::get('/admin', function () {
//     return "Selamat Datang, ADMINISTRATOR";
// })->middleware('auth')->name(('admin'));

// DISESUAIKAN AJA ROLENYA MASEH

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/barang', [BarangController::class, 'index'])->name('barang');
    Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
    Route::post('/barang/store', [BarangController::class, 'store'])->name('barang.store');
    Route::get('/barang/destroy/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');
    Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
    Route::put('/barang/update/{id}', [BarangController::class, 'update'])->name('barang.update');
    
    Route::resource('/barangmasuk', BarangmasukController::class);

    Route::resource('/supplier', SupplierController::class);

    Route::get('/pinjam', [PinjamController::class, 'history'])->name('pinjam');
    Route::get('/pinjam/create', [PinjamController::class, 'create'])->name('pinjam.create');
    Route::get('/pinjam/store', [PinjamController::class, 'store'])->name('pinjam.store');
});

require __DIR__.'/auth.php';
