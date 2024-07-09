<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgressKasusHukum;

class ProgressKasusHukumController extends Controller
{
    public function UpdateProgress(Request $request){

        // dd($request->all());

        $request->validate([
            'topik_progress' => 'required|string|max:255',
            'date' => 'required|date',
            'detail' => 'required|string',
            'id_kasus' => 'required|string',

        ]);


        ProgressKasusHukum::create([
            'topik_progress' => $request->topik_progress,
            'date' => $request->date,
            'detail' => $request->detail,
            'id_kasus' => $request->id_kasus,

        ]);

        $auth = true;
        return view('userLBH.detail_perkara_berlangsung', ['auth'=> $auth]);

    }
}
