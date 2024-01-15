<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPendudukController;
use App\Http\Controllers\LoginController;
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

