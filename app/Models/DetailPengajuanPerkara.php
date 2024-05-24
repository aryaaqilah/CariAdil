<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPengajuanPerkara extends Model
{
    use HasFactory;

    protected $table = 'detail_pengajuan_perkara';
    protected $primaryKey = 'id_pengajuan';
    protected $guarded = [];
}
