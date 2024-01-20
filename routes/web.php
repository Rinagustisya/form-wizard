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

Route::group([
    'prefix' => config('admin.path'),
], function(){
    Route::get('/login', [LoginController::class, 'login'])->name('admin.login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.perform');
    
    Route::group(['middleware' =>'auth:admin'], function(){
        Route::view('/dashboard', 'dashboard')->name('dashboard');
        Route::post('logout', [LoginController::class, 'logout'])->name('admin.logout');

        Route::group(['middleware' =>['can:role,"pengelola"']], function(){
            Route::get('/Pengelola/Monitoring', [PengelolaController::class, 'index'])->name('pengelola.monitoring');
        });
        
        Route::group(['middleware' =>['can:role,"admin"']], function(){
            Route::get('/Admin/Monitoring', [AdminController::class, 'index'])->name('admin.monitoring');
            Route::get('/Admin/Monitoring/Data-Penduduk-All', [DataPendudukController::class, 'show'])->name('show-data');
            Route::get('/data-gambar/{filename?}', [DataPendudukController::class, 'showGambar'])->name('show.foto');
        });
    });
});
