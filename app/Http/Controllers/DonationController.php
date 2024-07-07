<?php

namespace App\Http\Controllers;

use App\Models\TransaksiDonasi;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        $auth = false;
        return view('user.donasi', ['auth'=> $auth, 'id'=> $id]);
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
    public function store(Request $request, string $id)
    {
        // $validatedData = $request->validate([
        //     // 'id_kasus_hukum' => $id,
        //     'nominal' => 'required',
        //     'nama' => 'required',
        //     'email' => 'required',
        //     'nomor_telepon' => 'required',
        //     'dukungan' => '',
        // ]);

        $validatedData = [
            'id_kasus_hukum' => $id,
            'nominal' => $request->nominal,
            'nama' => $request->nama,
            'email' => $request->email,
            'nomor_telepon' => $request->nomor_telepon,
            'dukungan' => $request->dukungan,
        ];

        // dd($validatedData);

        TransaksiDonasi::create($validatedData);

        return redirect('/berita/kasus-hukum/'.$id);
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
