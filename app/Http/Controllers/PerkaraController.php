<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerkaraController extends Controller
{
    public function indexPerkaraBerlangsung() {
        return view('features.perkara.berlangsung');
    }
}
