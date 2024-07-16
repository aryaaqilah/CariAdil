<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgressKasusHukum;

class ProgressKasusHukumController extends Controller
{
    public function UpdateProgress(Request $request, $id){
        // dd($request->waktu.":00");
        // dd($request->lokasi);

        $request->validate([
            'topik_progress' => 'required|string|max:255',
            'date' => 'required|date',
            'waktu' => 'required',
            'detail' => 'required|string',
            'id_kasus' => 'required|string',
            'lokasi' => 'required|string',
        ]);

        ProgressKasusHukum::create([
            'id_kasus' => $request->id_kasus,
            'topik_progress' => $request->topik_progress,
            'lokasi' => $request->lokasi,
            'date' => $request->date,
            'waktu' => $request->waktu.":00",
            'detail' => $request->detail,
        ]);

        return redirect()->route('detail_perkara', ['id' => $id])->with('success', 'Progress has been added');

    }


}
