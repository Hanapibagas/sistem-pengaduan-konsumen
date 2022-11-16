<?php

use App\Http\Controllers\Admin\DashbordController;
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

Route::prefix('dashboard')->middleware(['auth', 'administrator'])->group(function () {
    Route::get('/', [DashbordController::class, 'index'])->name('dashboard-index');
});
