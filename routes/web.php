<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

use App\Http\Controllers\CaseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::get('/store/{id_barang}', [ProductController::class, 'index']);
Route::prefix('/kasus-hukum')->group(function(){
    Route::get('/', [CaseController::class, 'index']);
    Route::get('/{id_kasus}', [CaseController::class, 'index']);
    Route::get('/{id_kasus}/donasi', [DonationController::class, 'index']);
});
Route::get('/form-pengajuan-hukum', [FormController::class, 'index']);

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
