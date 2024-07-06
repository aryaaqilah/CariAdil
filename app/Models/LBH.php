<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LBH extends Model
{
    use HasFactory;

    protected $table = 'LBH';
    protected $primaryKey = 'id_LBH';
    protected $guarded = [];
}
