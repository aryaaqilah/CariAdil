<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\FormController;

Route::any('/store/{id_barang}', []);
Route::any('/kasus-hukum', []);
Route::any('/kasus-hukum/{id_kasus}', []);
Route::any('/kasus-hukum/{id_kasus}/donasi', []);
Route::any('/form-pengajuan-hukum', []);

Route::prefix('/lbh')->group(function(){
    Route::get('/login', function(){
        return "login";
    });

    Route::get('/pengajuan-bantuan-hukum/{id_kasus?}', function($id_kasus){
        return 'a';
    });

    Route::get('/perkara-berlangsung/{id_kasus}', function($id_kasus){

    });
});

// /admin/login
// /admin/dashboard
// /admin/role
// /admin/donasi
// /admin/produk
// /admin/kasus-hukum
// /admin/pengajuan
// /admin/pengajuan/edit

Route::prefix('/admin')->group(function(){
    Route::get('/login', [App\Http\Controllers]);
});
