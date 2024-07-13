<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KasusHukum extends Model
{
    use HasFactory;

    protected $table = 'kasus_hukum';
    protected $primaryKey = 'id_kasus';
    protected $guarded = [];

    protected $with = ['approvedTransactions', 'form', 'lbh'];

    // Hasmany Transaksi Donasi
    public function approvedTransactions()
    {
        return $this->hasMany(TransaksiDonasi::class, 'id_kasus_hukum', 'id_kasus')->where('status_pembayaran', true);
    }

    // Belongs to Form Pengajuan
    public function form()
    {
        return $this->belongsTo(FormPengajuan::class, 'id_form', 'id_form');
    }

    // Belongs to LBH
    public function lbh()
    {
        return $this->belongsTo(LBH::class, 'id_lbh', 'id_LBH');
    }
}
