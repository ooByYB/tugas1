<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PerpusController;
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
})->name('welcome');

// Route::get('/anggota', [AnggotaController::class, 'create'])->name('get_anggota');

// Route::get('/buku', [BukuController::class, 'create'])->name('get_buku');

// Route::get('/petugas', [PetugasController::class, 'create'])->name('get_petugas');

Route::resource('/buku', BukuController::class);

Route::resource('/petugas', PetugasController::class);

Route::resource('/anggota', AnggotaController::class);

Route::resource('/tabel', PerpusController::class);

// Route::get('/tabel', function () {
//     return view('king.form.tabel');
// })->name('get_tabel');

