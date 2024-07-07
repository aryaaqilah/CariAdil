<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KasusHukum;

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

    public function PP(){
        $auth = true;
        return view('userLBH.perkara_berlangsung', ['auth'=> $auth]);
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
        $auth = true;
        // dd($kasusHukum);
        return view('user.detail_berita', ['kasusHukum' => $kasusHukum, 'auth' => $auth]);
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
