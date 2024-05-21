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
