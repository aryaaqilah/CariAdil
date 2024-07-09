<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KasusHukum;

class KasusHukumController extends Controller
{
    public function kasusTerbaruHomepage() {
        $kasusHukum = KasusHukum::orderBy('created_at')->take(2)->get();

        if ($kasusHukum->isEmpty()) {
            return 'No data';
        }

        return $kasusHukum;
    }

    public function kasusHukumHomepage() {

    }


    
}
