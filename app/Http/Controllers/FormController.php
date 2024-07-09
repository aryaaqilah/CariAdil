<?php

namespace App\Http\Controllers;

use App\Models\FormPengajuan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{

    public function index()
    {
        $auth = false;
        $noPemohon = 'CA-' . str_pad(FormPengajuan::count() + 1, 3, '0', STR_PAD_LEFT);

        return view('user.form', ['auth' => $auth, 'noPemohon' => $noPemohon]);
    }

    public function pengajuan_bantuan(){
        $auth = true;
        return view('userLBH.pengajuan_perkara', ['auth' => $auth]);
    }

    public function detail_pengajuan_bantuan(){
        $auth = true;
        return view('userLBH.detail_pengajuan_perkara', ['auth' => $auth]);
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
        DB::beginTransaction();

        try {
            if ($request->hasFile('image_url')) {
                $imagePath = $request->file('image_url')->store('public');
            }
            
            FormPengajuan::create([
                'nomor_pemohon' => $request->nomor_pemohon,
                'nama' => $request->nama,
                'nama_panggilan' => $request->nama_panggilan,
                'tempat_lahir' => $request->tempat_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'agama' => $request->agama,
                'status_perkawinan' => $request->status_perkawinan,
                'jumlah_anak' => $request->jumlah_anak,
                'jumlah_anak_tanggungan' => $request->jumlah_anak_tanggungan,
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
                'pendidikan_terakhir' => $request->pendidikan_terakhir,
                'telepon' => $request->telepon,
                'HP' => $request->HP,
                'uraian' => $request->uraian,
                'lokasi_pembuatan_form' => $request->lokasi_pembuatan_form,
                'tanggal' => Carbon::now(),
                'image_url' => $imagePath,
            ]);
            
            dd($request);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Gagal mengajukan form');
        }
        
        return redirect()->route('loading');
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
