<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPendudukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengelolaController;
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


Route::get('/', [DataPendudukController::class, 'index'])->name('form');
Route::post('/getKabupaten', [DataPendudukController::class, 'getKabupaten'])->name('getKabupaten');
Route::post('/getKecamatan', [DataPendudukController::class, 'getKecamatan'])->name('getKecamatan');
Route::post('/getDesa', [DataPendudukController::class, 'getDesa'])->name('getDesa');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::get('/Admin/Monitoring', [AdminController::class, 'index'])->name('admin.monitoring');
Route::get('/Admin/Monitoring/Data-Penduduk-All', [DataPendudukController::class, 'show'])->name('show-data');
Route::get('/Pengelola/Monitoting', [PengelolaController::class, 'index'])->name('pengelola.monitoring');
Route::get('/data-gambar/{filename?}', [DataPendudukController::class, 'showGambar'])->name('show.foto');

