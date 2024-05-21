<?php

use Illuminate\Support\Facades\Route;

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
// /admin/login
// /admin/dashboard
// /admin/role
// /admin/donasi
// /admin/produk
// /admin/kasus-hukum
// /admin/pengajuan
// /admin/pengajuan/edit
