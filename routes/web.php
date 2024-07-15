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
    Route::get('/pengajuan-bantuan-hukum/{id}', [CaseController::class, 'detail_pengajuan_bantuan'])->name('detail_pengajuan');
    Route::put('/pengajuan-bantuan-hukum', [CaseController::class, 'terima_pengajuan']);

    Route::get('/perkara-berlangsung', [CaseController::class, 'perkara_berlangsung']);
    Route::get('/perkara-berlangsung/{id}', [CaseController::class, 'detail_perkara_berlangsung'])->name('detail_perkara');
    Route::post('/perkara-berangsung/{id}', [ProgressKasusHukumController::class, 'UpdateProgress']);

});

//ADMIN
Route::prefix('/admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login']);

    Route::get('/dashboard', [AdminController::class, 'index']);

    Route::get('/admin-role', [AdminController::class, 'adminRole'])->name('admin.admin-role');
    Route::get('/admin-role/create', [AdminController::class, 'adminCreate']);
    Route::post('/admin-role', [AdminController::class, 'adminStore']);

    Route::get('/lbh-role', [AdminController::class, 'lbhRole'])->name('admin.lbh-role');
    Route::get('/lbh-role/create', [AdminController::class, 'lbhCreate']);
    Route::post('/lbh-role', [AdminController::class, 'lbhStore']);

    Route::get('/donasi', [AdminController::class, 'donation']);

    Route::get('/log', [AdminController::class, 'log']);

    Route::get('/pengajuan', [AdminController::class, 'submission']);
    Route::get('/perkara-pengajuan/{id}', [AdminController::class, 'detail_pengajuan_perkara']);

    Route::get('/kasus-perkara', [AdminController::class, 'activeCases']);
    // Route::get('/produk', [AdminController::class, 'index']);

    // New added
    Route::get('/perkara-berlangsung', [AdminController::class, 'workingRole']);
});

Route::prefix('/perkara')->group(function () {
    Route::get('/berlangsung', [PerkaraController::class, 'indexPerkaraBerlangsung']);
});


// Admin
Route::get('/admindashboard', function () {
    return view('admin.dashboard');
});
Route::get('/donasidetail', function () {
    return view('admin.donasi-detail');
});
Route::get('/donasi', function () {
    return view('admin.donasi');
});
Route::get('/log', function () {
    return view('admin.log');
});
Route::get('/perkaraberita', function () {
    return view('admin.perkara-berita');
});
Route::get('/perkaraberlangsung', function () {
    return view('admin.perkara-berlangsung');
});
Route::get('/perkaramasuk', function () {
    return view('admin.perkara-masuk');
});
Route::get('/perkarapengajuan', function () {
    return view('admin.perkara-pengajuan');
});
Route::get('/perkarapengajuandetail', function () {
    return view('admin.perkara-pengajuan-detail');
});
Route::get('/addadmin', function () {
    return view('admin.role-addadmin');
});
Route::get('/adduserlbh', function () {
    return view('admin.role-adduserlbh');
});
Route::get('/roleadmin', function () {
    return view('admin.role-admin');
});
Route::get('/roleuserlbh', function () {
    return view('admin.role-userlbh');
});
