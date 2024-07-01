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

Route::get("/loading", function() {
    return view('core.loading');
});

//USER
Route::get('/', [HomepageController::class, 'index']);
Route::prefix('/kasus-hukum')->group(function(){
    Route::get('/', [CaseController::class, 'index']);
    Route::get('/{id_kasus}', [CaseController::class, 'show']);
    Route::get('/{id_kasus}/donasi', [DonationController::class, 'index']);
});
Route::get('/form-pengajuan-hukum', [FormController::class, 'index']);
Route::get('/store', [StoreController::class, 'index']);
Route::get('/store/{id_barang}', [ProductController::class, 'index']);

//LBH
Route::prefix('/lbh')->group(function(){
    Route::get('/login', [UserController::class, 'index']);
    Route::get('/pengajuan-bantuan-hukum/{id?}', [FormController::class, 'show']);
    Route::get('/perkara-berlangsung', [CaseController::class, 'showLBH']); //diandra
    // Route::get('/perkara-berlangsung/{id?}', [CaseController::class, 'show']); //diandra
});

//ADMIN
Route::prefix('/admin')->group(function(){
    Route::get('/login', [UserController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/role', [UserController::class, 'index']);
    Route::get('/donasi', [DonationController::class, 'index']);
    Route::get('/produk', [ProductController::class, 'index']);
    Route::get('/kasus-hukum', [FormController::class, 'index']);
    Route::get('/pengajuan', [FormController::class, 'index']);
});

Route::prefix('/perkara')->group(function   () {
    Route::get('/berlangsung', [PerkaraController::class, 'indexPerkaraBerlangsung']);
});




