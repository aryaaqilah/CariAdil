<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CaseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::any('/store/{id_barang}', []);
Route::any('/kasus-hukum', []);
Route::any('/kasus-hukum/{id_kasus}', []);
Route::any('/kasus-hukum/{id_kasus}/donasi', []);
Route::any('/form-pengajuan-hukum', []);

Route::prefix('/lbh')->group(function(){
    Route::get('/login', [UserController::class, 'index']);

    Route::get('/pengajuan-bantuan-hukum/{id_kasus?}', function($id_kasus){
        return 'a';
    });

    Route::get('/perkara-berlangsung/{id_kasus}', function($id_kasus){

    });
});


Route::prefix('/admin')->group(function(){
    Route::get('/login', [UserController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/role', [UserController::class, 'index']);
    Route::get('/donasi', [DonationController::class, 'index']);
    Route::get('/produk', [ProductController::class, 'index']);
    Route::get('/kasus-hukum', [FormController::class, 'index']);
    Route::get('/pengajuan', [FormController::class, 'index']);
});
