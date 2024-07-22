<?php

use App\Http\Controllers;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TransaksiDonasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaseController;

use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\PerkaraController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProgressKasusHukumController;

Route::get("/loading", function () {
    return view('core.loading');
})->name('loading');

Route::get("/hehe", [CaseController::class, 'detail_berita']);
Route::get("/donana", [DonationController::class, 'index']);


//USER
Route::get('/', [HomepageController::class, 'index']);
Route::prefix('/berita')->group(function () {
    Route::get('/', [CaseController::class, 'index']);
    Route::get('/search', [CaseController::class, 'search']);
    Route::get('/kasus-hukum/{id}', [CaseController::class, 'show']);
    Route::get('/donasi/{id}', [DonationController::class, 'index']);
    Route::post('/donasi/{id}/confirm', [DonationController::class, 'confirm']);
    Route::post('/donasi/{id}/store', [DonationController::class, 'store']);
});
Route::get('/tentang', [HomepageController::class, 'tentang']);
Route::get('/form-pengajuan-hukum', [FormController::class, 'index']); //ok
Route::post('/form-pengajuan-hukum', [FormController::class, 'store']);
Route::get('/store', [ProductController::class, 'index']); //ok
Route::get('/store/{id}', [ProductController::class, 'show']);
Route::any('/konfirmasi-pembayaran', [TransaksiDonasiController::class, 'konfirmasi']);

//LBH
Route::prefix('/lbh')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('beranda'); //ok

    Route::get('/login', [UserController::class, 'showLogin'])->name('login');
    Route::post('/login', [UserController::class, 'login'])->name('login.post');

    Route::get('/pengajuan-bantuan-hukum', [CaseController::class, 'pengajuan_bantuan']);
    Route::get('/pengajuan-bantuan-hukum/search', [CaseController::class, 'search_pengajuan']);
    Route::get('/pengajuan-bantuan-hukum/{id}', [CaseController::class, 'detail_pengajuan_bantuan'])->name('detail_pengajuan');
    Route::put('/pengajuan-bantuan-hukum/{id}', [CaseController::class, 'terima_pengajuan']);

    Route::get('/perkara-berlangsung', [CaseController::class, 'perkara_berlangsung']);
    Route::get('/perkara-berlangsung/search', [CaseController::class, 'search_perkara']);
    Route::get('/perkara-berlangsung/{id}', [CaseController::class, 'detail_perkara_berlangsung'])->name('detail_perkara');
    Route::post('/perkara-berangsung/{id}', [ProgressKasusHukumController::class, 'UpdateProgress']);
    Route::put('/perkara-berangsung/{id}', [ProgressKasusHukumController::class, 'ProgressSelesai']);

    Route::get('/riwayat-kasus', [CaseController::class, 'riwayat_kasus']);
    Route::get('/riwayat-kasus/search', [CaseController::class, 'search_riwayat']);
    Route::get('/riwayat-kasus/{id}', [CaseController::class, 'detail_riwayat_kasus']);
});

//ADMIN
Route::prefix('/admin')->group(function () {
Route::get('/login', [AdminController::class, 'login']);

    Route::get('/dashboard', [AdminController::class, 'index']);

    Route::get('/donasi', [AdminController::class, 'donation']);
    Route::get('/donasi/{id}', [AdminController::class, 'donation_detail'])->name('donasi_detail');
    Route::get('/donasi-konfirmasi', [AdminController::class, 'konfirmasi_donasi']);

    Route::get('/pengajuan-perkara', [AdminController::class, 'pengajuan_perkara']);
    Route::get('/pengajuan-perkara/{id}', [AdminController::class, 'detail_pengajuan_perkara'])->name('detail_pengajuan_perkara');
    Route::put('/pengajuan-perkara/{id}', [AdminController::class, 'terima_pengajuan']);

    // Route::get('/kasus-perkara-berita')

    // New added
    Route::get('/perkara-berlangsung', [AdminController::class, 'perkara_berlangsung']);
    Route::get('/perkara-berlangsung/{id}', [AdminController::class, 'detail_perkara_berlangsung'])->name('detail_perkara_berlangsung');
    Route::post('/perkara-berlangsung/{id}', [AdminController::class, 'detail_perkara_berlangsung_create'])->name('detail_perkara_berlangsung_create');
    Route::put('/perkara-berlangsung/{id}', [AdminController::class, 'update_perkara_berlangsung']);

    Route::get('/role-admin', [AdminController::class, 'adminRole']);
    Route::get('/role-admin/create', [AdminController::class, 'adminCreate']);
    Route::post('/role-admin/create', [AdminController::class, 'adminStore']);

    Route::get('/role-lbh', [AdminController::class, 'lbhRole']);
    Route::get('/role-lbh/create', [AdminController::class, 'lbhCreate']);
    Route::post('/role-lbh/create', [AdminController::class, 'lbhStore']);
});

Route::prefix('/perkara')->group(function () {
    Route::get('/berlangsung', [PerkaraController::class, 'indexPerkaraBerlangsung']);
});

Route::get('/donasikonfirmasi', function(){
    return view('admin.donasi-konfirmasi');
});

