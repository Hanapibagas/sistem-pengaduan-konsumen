<?php

use App\Http\Controllers\Admin\BeritaAdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\LaporanAdminController;
use App\Http\Controllers\Admin\PenggunaController;
use App\Http\Controllers\Admin\SurveiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasaiPengaduanController;
use App\Http\Controllers\InformasiregistrasiController;
use App\Http\Controllers\KirimInformasiController;
use App\Http\Controllers\KirimPengaduController;
use App\Http\Controllers\PantauPengaduController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\RegulasiController;
use App\Http\Controllers\TataCaraPengaduanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('index');

//route navbar
Route::resource('profile', ProfileController::class);
Route::get('kebijakan', [RegulasiController::class, 'index'])->name('kebijakan-index');

// route berita
Route::resource('berita', BeritaController::class);
Route::get('detail-berita/{slug}', [BeritaController::class, 'detail_berita'])->name('details-berita');


Route::resource('tata-cara-pengaduan', TataCaraPengaduanController::class);
Route::resource('informasi-registrasi', InformasiregistrasiController::class);
Route::resource('kirim-pengadu', PengaduanController::class);

// route layanan
Route::resource('registrasi-pengadu', RegistrasiController::class);
// route pengaduan
Route::get('informasi-pengadu-guest', [KirimPengaduController::class, 'infoguest'])->name('informasi-pengadu-guest');
Route::get('kirim-pengadu', [KirimPengaduController::class, 'kirimpengadu'])->name('kirim-pengadu');
Route::resource('kirim-pengaduan', KirimPengaduController::class);

// route informasi pengadu
Route::get('kirim-informasi', [KirimInformasiController::class, 'kiriminformasi'])->name('kirim-informasi');
Route::post('kirim-informasi', [KirimInformasiController::class, 'store'])->name('kirim-informasi-admin');

Route::get('informasi-status-pengadu-guest', [PantauPengaduController::class, 'infoguest'])->name('informasi-status-pengadu-guest');
Route::get('informasi-status-pengadu', [PantauPengaduController::class, 'pantaupengaduan'])->name('informasi-status-pengadu');

// Route::get('kirim-email', [EmailController::class, 'index'])->name('kirim-email');

Auth::routes();

Route::prefix('dashboard')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard-index');
    Route::resource('berita-admin', BeritaAdminController::class);

    // route laporan pengaduan
    Route::get('list-laporan', [LaporanAdminController::class, 'index'])->name('list-laporan-admin');
    Route::get('data-laporan-pengaduan', [LaporanAdminController::class, 'laporanpengaduan'])->name('data-laporan-pengaduan');
    Route::get('detail-laporan-pengaduan/{id}', [LaporanAdminController::class, 'detailpengaduan'])->name('detail-laporan-pengaduan');
    Route::put('update-data-laporan-pengaduan/{id}', [LaporanAdminController::class, 'updatejawabanpengaduan'])->name('update-data-laporan-pengaduan');
    Route::get('cetak-pdf-laporan-pengaduan/{id}', [LaporanAdminController::class, 'cetakpdflaporanpengaduan'])->name('cetak-pdf-laporan-pengaduan');
    Route::post('cari-data-laporan-pengaduan', [LaporanAdminController::class, 'cari'])->name('cari-data-laporan-pengaduan');
    Route::post('cetak-rekap-laporan-pengaduan-pdf', [LaporanAdminController::class, 'cetak_rekeap_laporan_pdf_pdf'])->name('cetak-rekap-laporan-pengaduan-pdf');

    // kirim email

    // route informasi pengaudan
    Route::get('data-informasi-pengaduan', [LaporanAdminController::class, 'laporaninformasaipengaduan'])->name('data-informasi-pengaduan');

    // route pengguna
    Route::get('pengguna-akun', [PenggunaController::class, 'index'])->name('pengguna-akun');
    Route::get('pengguna-akun/create', [PenggunaController::class, 'create'])->name('tambah-pengguna-akun');
    Route::post('pengguna-akun/register', [PenggunaController::class, 'register'])->name('register-pengguna-akun');
    Route::get('pengguna-akun/{id}', [PenggunaController::class, 'edit'])->name('edit-pengguna-akun');
    Route::delete('pengguna-akun/{id}', [PenggunaController::class, 'delete'])->name('delete-akun');

    // route survei
    Route::get('survei', [SurveiController::class, 'index'])->name('survei-index');
    Route::get('survei/create', [SurveiController::class, 'create'])->name('survei-create');
});
