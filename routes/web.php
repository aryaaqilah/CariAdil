<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', function () {
    return "andreas";
});

// /store
Route::get('/store', function(){
    return "store";
});

// store/id-barang

// /kasus-hukum
// /kasus-hukum/id-kasus
// /kasus-hukum/id/donasi
// /form-pengajuan-hukum

// /lbh/login
// /lbh/pengajuan-bantuan-hukum
// /lbh/pengajuan-bantuan-hukum/id-kasus
// /lbh/perkara-berlangsung
// /lbh/perkara-berlangsung/id-kasus
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
    Route::get('/login', []);
});
