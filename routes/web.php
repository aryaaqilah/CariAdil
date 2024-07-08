<?php

use App\Http\Controllers\PerkaraController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

use App\Http\Controllers\CaseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\StoreController;

Route::get("/loading", function () {
    return view('core.loading');
})->name('loading');

Route::get("/hehe", [CaseController::class, 'detail_berita']);
Route::get("/donana", [DonationController::class, 'index']);


//USER
Route::get('/', [HomepageController::class, 'index']);
Route::prefix('/berita')->group(function () {
    Route::get('/', [CaseController::class, 'index']);
    Route::get('/kasus-hukum/{id}', [CaseController::class, 'show']);
    Route::get('/donasi/{id}', [DonationController::class, 'index']);
    Route::post('/donasi/{id}/store', [DonationController::class, 'store']);
});
Route::get('/form-pengajuan-hukum', [FormController::class, 'index']); //ok
Route::post('/form-pengajuan-hukum', [FormController::class, 'store']);
Route::get('/store', [ProductController::class, 'index']); //ok
Route::get('/store/{id}', [ProductController::class, 'show']);

//LBH
Route::prefix('/lbh')->group(function () {
    Route::get('/', [UserController::class, 'index']); //ok
    Route::get('/login', [UserController::class, 'login']);
    Route::get('/pengajuan-bantuan-hukum/{id}', [FormController::class, 'show']);
    Route::get('/perkara-berlangsung', [CaseController::class, 'showLBH']);
    Route::get('/PSB_Progress', [CaseController::class, 'PP']);
    Route::get('/rawr', function () {
        return view('userLBH.update_perkara.dropdown');
    });
    //diandra
    // Route::get('/perkara-berlangsung/{id?}', [CaseController::class, 'show']); //diandra
});

//ADMIN
Route::prefix('/admin')->group(function () {
    Route::get('/login', [UserController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/role', [UserController::class, 'index']);
    Route::get('/donasi', [DonationController::class, 'index']);
    Route::get('/produk', [ProductController::class, 'index']);
    Route::get('/kasus-hukum', [FormController::class, 'index']);
    Route::get('/pengajuan', [FormController::class, 'index']);
});

Route::prefix('/perkara')->group(function () {
    Route::get('/berlangsung', [PerkaraController::class, 'indexPerkaraBerlangsung']);
});
