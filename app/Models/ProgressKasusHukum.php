<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgressKasusHukum extends Model
{
    use HasFactory;

    protected $table = 'progress_kasus_hukum';
    protected $primaryKey = 'id_progress';
    protected $guarded = [];
}
