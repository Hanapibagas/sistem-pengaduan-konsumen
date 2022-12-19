<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiregistrasiController;
use App\Http\Controllers\KirimPengaduController;
use App\Http\Controllers\PantauPengaduController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\TataCaraPengaduanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::resource('profile', ProfileController::class);
Route::resource('berita', BeritaController::class);
Route::resource('tata-cara-pengaduan', TataCaraPengaduanController::class);
Route::resource('informasi-registrasi', InformasiregistrasiController::class);
Route::resource('kirim-pengadu', PengaduanController::class);

Route::resource('registrasi-pengadu', RegistrasiController::class);
Route::get('informasi-pengadu-guest', [KirimPengaduController::class, 'infoguest'])->name('informasi-pengadu-guest');
Route::get('kirim-pengadu', [KirimPengaduController::class, 'kirimpengadu'])->name('kirim-pengadu');
Route::get('kirim-informasi', [KirimPengaduController::class, 'kiriminformasi'])->name('kirim-informasi');
Route::resource('kirim-pengaduan', KirimPengaduController::class);

Route::get('informasi-status-pengadu-guest', [PantauPengaduController::class, 'infoguest'])->name('informasi-status-pengadu-guest');
Route::get('informasi-status-pengadu', [PantauPengaduController::class, 'pantaupengaduan'])->name('informasi-status-pengadu');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('dashboard')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard-index');
});
