<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KasusHukum;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kasusHukum = KasusHukum::orderBy('created_at', 'DESC')->take(2)
        ->whereNotNull('id_lbh')
        ->whereNotNull('title')
        ->where('status_pengajuan', '!=', 'Selesai')
        ->get();
        $auth = false;

        return view('user.homepage', ['list_kasus_hukum' => $kasusHukum, 'auth' => $auth]);
    }

    public function tentang(){
        $auth = false;
        return view('user.tentang', ['auth'=>$auth]);
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
        //
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
        //
    }
}
