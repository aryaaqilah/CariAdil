<?php

namespace App\Http\Controllers;

use App\Models\FormPengajuan;
use Illuminate\Http\Request;

class FormController extends Controller
{

    public function index()
    {
        $auth = false;
        return view('user.form', ['auth' => $auth]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $request;

        FormPengajuan::create([
            'nama' => $request->nama,
            'nama_panggilan' => $request->nama_panggilan,
            'tempat_lahir' => $request->tempat_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'status_perkawinan' => $request->status_perkawinan,
            'alamat_lengkap' => $request->alamat_lengkap,
            'RT_RW' => $request->RT_RW,
            'Desa_Kelurahan' => $request->Desa_Kelurahan,
            'Kabupaten_Kota' => $request->Kabupaten_Kota,
            'kode_pos' => $request->kode_pos,
            'kecamatan' => $request->kecamatan,
            'provinsi' => $request->provinsi,
            'identitas_diri' => $request->identitas_diri,
            'nomor_identitas' => $request->nomor_identitas,
            'keterangan_tidak_mampu' => $request->keterangan_tidak_mampu,
            'nomor_keterangan_tidak_mampu' => $request->nomor_keterangan_tidak_mampu,
            'pekerjaan' => $request->pekerjaan,
            'jumlah_tanggungan' => $request->jumlah_tanggungan,
            'pekerjaan_terakhir' => $request->pekerjaan_terakhir,
            'telepon' => $request->telepon,
            'HP' => $request->HP,
            'uraian' => $request->uraian,
            'lokasi_pembuatan_form' => $request->lokasi_pembuatan_form,
            'tanggal' => $request->tanggal,
            // 'image_url' =>
        ]);
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
