<?php

use App\Http\Controllers\Admin\DashbordController;
use App\Http\Controllers\Admin\DataDiriController as AdminDataDiriController;
use App\Http\Controllers\Admin\DiadukanController as AdminDiadukanController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\TentangDiadukanController as AdminTentangDiadukanController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DataDiriController;
use App\Http\Controllers\DiadukanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoRegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StatusPengaduanController;
use App\Http\Controllers\TentangDiadukanController;
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
Route::resource('blog', BlogController::class);
Route::resource('profile', ProfileController::class);
Route::resource('data-diri', DataDiriController::class);
Route::resource('data-diadukan', DiadukanController::class);
Route::resource('data-tentang-diadukan', TentangDiadukanController::class);
Route::resource('info-register', InfoRegisterController::class);
Route::get('pantau-pengaduan', [StatusPengaduanController::class, 'index'])->name('show-pengadu');
Route::get('info-pantauan`', [StatusPengaduanController::class, 'guest'])->name('pantau-pengaduan.guest');

Auth::routes();

Route::prefix('dashboard')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [DashbordController::class, 'index'])->name('dashboard-index');

    Route::resource('pengaduan', AdminDataDiriController::class);
    Route::resource('tentang', AdminTentangDiadukanController::class);
    Route::resource('laporan', LaporanController::class);
});
