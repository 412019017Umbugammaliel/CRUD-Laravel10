<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/buku', [App\Http\Controllers\BukuController::class, 'index']);
Route::post('/storebuku', [App\Http\Controllers\BukuController::class, 'store'])->name('store');
Route::get('/editbuku/{id}', [App\Http\Controllers\BukuController::class, 'edit'])->name('editbuku');
Route::get('/tampilbuku', [App\Http\Controllers\BukuController::class, 'tampilkandata']);
Route::match(['post', 'put'], '/editbuku/update/{id}', [App\Http\Controllers\BukuController::class, 'update'])->name('updatebuku');
Route::delete('/deletebuku/{id}', [App\Http\Controllers\BukuController::class, 'destroy'])->name('hapusbuku');

Route::get('/anggota', [App\Http\Controllers\AnggotaController::class, 'index']);
Route::post('/anggota', [App\Http\Controllers\AnggotaController::class, 'store'])->name('anggota');
Route::get('/tampilanggota', [App\Http\Controllers\AnggotaController::class, 'tampilkananggota']);
Route::match(['post', 'put'], '/edit/update/{id}', [App\Http\Controllers\AnggotaController::class, 'update'])->name('update');
Route::delete('/deleteanggota/{id}', [App\Http\Controllers\AnggotaController::class, 'destroy'])->name('hapusanggota');
Route::get('/editanggota/{id}', [App\Http\Controllers\AnggotaController::class, 'edit'])->name('editanggota');

Route::get('/tampilpeminjaman', [App\Http\Controllers\PeminjamanController::class, 'index']);
Route::post('/store', [App\Http\Controllers\PeminjamanController::class, 'store'])->name('peminjaman');
Route::get('/peminjaman', [App\Http\Controllers\PeminjamanController::class, 'tampilkanpeminjaman']);
Route::get('/edit/{id}', [App\Http\Controllers\PeminjamanController::class, 'edit'])->name('detail');
Route::delete('/deletepeminjam/{id}', [App\Http\Controllers\PeminjamanController::class, 'destroy'])->name('hapuspeminjaman');