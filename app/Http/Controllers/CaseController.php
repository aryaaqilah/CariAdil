<?php

namespace App\Http\Controllers;

use App\Models\ProgressKasusHukum;
use Illuminate\Http\Request;
use App\Models\KasusHukum;
use Laravel\Prompts\Progress;

class CaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kasusHukum = KasusHukum::orderBy('tanggal', 'DESC')->get();
        $auth = false;

        // dd($kasusHukum);

        return view('user.berita', ['list_kasus_hukum' => $kasusHukum, 'auth' => $auth]);
    }

    public function detail_berita(){
        $auth = false;
        return view('user.detail_berita', ['auth' => $auth]);
    }
    public function showLBH(){
        $auth = true;
        return view('userLBH.perkara_berlangsung', ['auth' => $auth]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kasusHukum = KasusHukum::find($id);
        $progress = ProgressKasusHukum::select('*')->where('id_kasus', '=', $id)->get();
        $auth = false;
        // dd($progress);
        return view('user.detail_berita', ['kasusHukum' => $kasusHukum, 'auth' => $auth, 'progress' => $progress]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
