<?php

use App\Http\Controllers\Admin\DashbordController;
use App\Http\Controllers\Admin\DataDiriController as AdminDataDiriController;
use App\Http\Controllers\Admin\DiadukanController as AdminDiadukanController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\TentangDiadukanController as AdminTentangDiadukanController;
use App\Http\Controllers\DataDiriController;
use App\Http\Controllers\DiadukanController;
use App\Http\Controllers\HomeController;
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
Route::resource('data-diri', DataDiriController::class);
Route::resource('data-diadukan', DiadukanController::class);
Route::resource('data-tentang-diadukan', TentangDiadukanController::class);

Auth::routes();

Route::prefix('dashboard')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [DashbordController::class, 'index'])->name('dashboard-index');

    Route::resource('pengaduan', AdminDataDiriController::class);
    Route::resource('diadukan', AdminDiadukanController::class);
    Route::resource('tentang', AdminTentangDiadukanController::class);
    Route::resource('laporan', LaporanController::class);
});
