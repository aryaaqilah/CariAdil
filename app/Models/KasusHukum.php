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
}
