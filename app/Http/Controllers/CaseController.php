<?php

namespace App\Http\Controllers;

use App\Models\LBH;
use App\Models\ProgressKasusHukum;
use App\Models\TransaksiDonasi;
use Illuminate\Http\Request;
use App\Models\KasusHukum;
use Laravel\Prompts\Progress;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kasusHukum = KasusHukum::orderBy('tanggal', 'DESC')->get();
        $auth = false;

        $pidana = KasusHukum::select('*')->where('jenis_perkara', '=', 'Pidana')->get();
        $perdata = KasusHukum::select('*')->where('jenis_perkara', '=', 'Perdata')->get();
        // dd($perkara);

        $finalPerdata = array();
        $finalPidana = array();


        foreach ($pidana as $kasus) {
            $conditions = array('id_kasus_hukum' => $kasus->id_kasus, 'status_pembayaran' => 1);
            $transaksi = TransaksiDonasi::where($conditions)->sum('nominal');
            $data = [
                "id_kasus" => $kasus->id_kasus,
                "title" => $kasus->title,
                "description" => $kasus->description,
                "tanggal" => $kasus->tanggal,
                "target_donasi" => $kasus->target_donasi,
                "id_bank" => $kasus->id_bank,
                "id_form" => $kasus->id_form,
                "id_lbh" => $kasus->id_lbh,
                "jenis_perkara" => $kasus->jenis_perkara,
                "status_pengajuan" => $kasus->status_pengajuan,
                "image_url" => $kasus->image_url,
                "created_at" => $kasus->created_at,
                "updated_at" => $kasus->updated_at,
                "total" => $transaksi,
                "nama_lbh" => LBH::select('nama_lbh')->where('id_LBH', '=', $kasus->id_lbh)->get()
            ];
            array_push($finalPidana, $data);
        }


        foreach ($perdata as $kasus) {
            // $transaksi = TransaksiDonasi::where('id_kasus_hukum', $kasus->id_kasus)->where('status_pembayaran', 1)->sum('nominal');
            $conditions = array('id_kasus_hukum' => $kasus->id_kasus, 'status_pembayaran' => 1);
            $transaksi = TransaksiDonasi::where($conditions)->sum('nominal');
            $data = [
                "id_kasus" => $kasus->id_kasus,
                "title" => $kasus->title,
                "description" => $kasus->description,
                "tanggal" => $kasus->tanggal,
                "target_donasi" => $kasus->target_donasi,
                "id_bank" => $kasus->id_bank,
                "id_form" => $kasus->id_form,
                "id_lbh" => $kasus->id_lbh,
                "jenis_perkara" => $kasus->jenis_perkara,
                "status_pengajuan" => $kasus->status_pengajuan,
                "image_url" => $kasus->image_url,
                "created_at" => $kasus->created_at,
                "updated_at" => $kasus->updated_at,
                "total" => $transaksi,
                "nama_lbh" => LBH::select('nama_lbh')->where('id_LBH', '=', $kasus->id_lbh)->get()
            ];
            array_push($finalPerdata, $data);
        }

        // dd($transaksi);
        // $total = array();
        // foreach ($kasusHukum as $kasus) {
        //     # code...
        //     // $transaksi = TransaksiDonasi::select('*')->where('id_kasus_hukum', '=', $kasus->id_kasus)->get();
        //     // $totalEach = 0;
        //     // foreach ($transaksi as $trans){
        //     //     $totalEach += $trans->nominal;
        //     // }

        //     $transaksi = TransaksiDonasi::where('id_kasus_hukum', $kasus->id_kasus)->sum('nominal');
        //     $data = [
        //         "id_kasus" => $kasus->id_kasus,
        //         "title" => $kasus->title,
        //             "description" => $kasus->description,
        //             "tanggal" => $kasus->tanggal,
        //             "target_donasi" => $kasus->target_donasi,
        //             "id_bank" => $kasus->id_bank,
        //             "id_form" => $kasus->id_form,
        //             "id_lbh" => $kasus->id_lbh,
        //             "jenis_perkara" => $kasus->jenis_perkara,
        //             "status_pengajuan" => $kasus->status_pengajuan,
        //             "image_url" => $kasus->image_url,
        //             "created_at" => $kasus->created_at,
        //             "updated_at" => $kasus->updated_at,
        //             "total" => $transaksi,
        //             "nama_lbh" => LBH::select('nama_lbh')->where('id_LBH', '=', $kasus->id_lbh)->get()
        //         ];
        //         array_push($total, $data);
        //     }

        // $finalKasus = array();

        // $kasusHukum

        // dd($finalPerdata);

        return view('user.berita', ['list_kasus_pidana' => $finalPidana, 'list_kasus_perdata' => $finalPerdata, 'auth' => $auth]);
    }

    public function detail_berita(){
        $auth = false;
        return view('user.detail_berita', ['auth' => $auth]);
    }
    public function perkara_berlangsung(){
        $perkaraBerlangsung = KasusHukum::orderBy('tanggal', 'DESC')
        ->select('*')->get();
        $auth = true;
        return view('userLBH.perkara_berlangsung', ['auth' => $auth, 'perkaraBerlangsung' => $perkaraBerlangsung]);
    }

    public function detail_perkara_berlangsung($id){
        $perkaraBerlangsung = KasusHukum::join('form_pengajuan', 'form_pengajuan.id_form', '=', 'kasus_hukum.id_form')
        // ->join('transaksi_donasi', 'kasus_hukum.id_kasus', '=', 'transaksi_donasi.id_kasus_hukum')
        ->select('*')
        ->where('id_kasus', '=', $id)->first();
        $kasusHukum = KasusHukum::find($id);
        $progress = ProgressKasusHukum::select('*')->where('id_kasus', '=', $id)->get();
        $transaksi = TransaksiDonasi::select('*')->where('id_kasus_hukum', '=', $id)->where('status_pembayaran','=',1)->get();
        $total = 0;
        foreach ($transaksi as $trans){
            $total += $trans->nominal;
        }
        $auth = true;
        return view('userLBH.detail_perkara_berlangsung', ['auth'=> $auth, 'perkaraBerlangsung' => $perkaraBerlangsung, 'progress' => $progress]);
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
        $transaksi = TransaksiDonasi::select('*')->where('id_kasus_hukum', '=', $id)->where('status_pembayaran', '=', 1)->get();
        $total = 0;
        foreach ($transaksi as $trans){
            $total += $trans->nominal;
        }
        $auth = false;
        // dd($total);
        return view('user.detail_berita', ['kasusHukum' => $kasusHukum, 'auth' => $auth, 'progress' => $progress, 'total' => $total]);
    }

    public function search(Request $request){
        // $kata_kunci = isset($_GET['kata_kunci']) ? $_GET['kata_kunci'] : '';
        $kata_kunci = $request->str;

        $auth = false;

        $pidana = KasusHukum::select('*')->where('jenis_perkara', '=', 'Pidana')->where('title', 'LIKE', '%'. $kata_kunci.'%')->get();
        $perdata = KasusHukum::select('*')->where('jenis_perkara', '=', 'Perdata')->where('title', 'LIKE', '%'. $kata_kunci.'%')->get();
        // dd($perkara);

        $finalPerdata = array();
        $finalPidana = array();


        foreach ($pidana as $kasus) {
            $conditions = array('id_kasus_hukum' => $kasus->id_kasus, 'status_pembayaran' => 1);
            $transaksi = TransaksiDonasi::where($conditions)->sum('nominal');
            $data = [
                "id_kasus" => $kasus->id_kasus,
                "title" => $kasus->title,
                "description" => $kasus->description,
                "tanggal" => $kasus->tanggal,
                "target_donasi" => $kasus->target_donasi,
                "id_bank" => $kasus->id_bank,
                "id_form" => $kasus->id_form,
                "id_lbh" => $kasus->id_lbh,
                "jenis_perkara" => $kasus->jenis_perkara,
                "status_pengajuan" => $kasus->status_pengajuan,
                "image_url" => $kasus->image_url,
                "created_at" => $kasus->created_at,
                "updated_at" => $kasus->updated_at,
                "total" => $transaksi,
                "nama_lbh" => LBH::select('nama_lbh')->where('id_LBH', '=', $kasus->id_lbh)->get()
            ];
            array_push($finalPidana, $data);
        }


        foreach ($perdata as $kasus) {
            // $transaksi = TransaksiDonasi::where('id_kasus_hukum', $kasus->id_kasus)->where('status_pembayaran', 1)->sum('nominal');
            $conditions = array('id_kasus_hukum' => $kasus->id_kasus, 'status_pembayaran' => 1);
            $transaksi = TransaksiDonasi::where($conditions)->sum('nominal');
            $data = [
                "id_kasus" => $kasus->id_kasus,
                "title" => $kasus->title,
                "description" => $kasus->description,
                "tanggal" => $kasus->tanggal,
                "target_donasi" => $kasus->target_donasi,
                "id_bank" => $kasus->id_bank,
                "id_form" => $kasus->id_form,
                "id_lbh" => $kasus->id_lbh,
                "jenis_perkara" => $kasus->jenis_perkara,
                "status_pengajuan" => $kasus->status_pengajuan,
                "image_url" => $kasus->image_url,
                "created_at" => $kasus->created_at,
                "updated_at" => $kasus->updated_at,
                "total" => $transaksi,
                "nama_lbh" => LBH::select('nama_lbh')->where('id_LBH', '=', $kasus->id_lbh)->get()
            ];
            array_push($finalPerdata, $data);
        }

        // dd($kasus);
        return view('user.berita', ['list_kasus_pidana' => $finalPidana, 'list_kasus_perdata' => $finalPerdata, 'auth' => $auth]);
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


    public function kasusTerbaruHomepage() {
        $kasusHukum = KasusHukum::orderBy('created_at')->take(2)->get();

        if ($kasusHukum->isEmpty()) {
            return 'No data';
        }

        return $kasusHukum;
    }

    public function kasusHukumHomepage() {

    }

    public function pengajuan_bantuan()
    {
        $pengajuanBantuan = KasusHukum::whereNULL('id_lbh')->orderBy('tanggal', 'DESC')
        // ->join('kasus_hukum', 'form_pengajuan.id_form', '=', 'kasus_hukum.id_form')
        ->select('*')->get();
        // ->select('form_pengajuan.*', 'kasus_hukum.jenis_perkara')->get();
        $auth = true;

        // dd($pengajuanBantuan);

        return view('userLBH.pengajuan_perkara', ['pengajuanBantuan' => $pengajuanBantuan, 'auth' => $auth]);
    }

    public function detail_pengajuan_bantuan($id)
    {   
        $pengajuanBantuan = KasusHukum::join('form_pengajuan', 'form_pengajuan.id_form', '=', 'kasus_hukum.id_form')
        // ->join('transaksi_donasi', 'kasus_hukum.id_kasus', '=', 'transaksi_donasi.id_kasus_hukum')
        ->select('*')
        ->where('id_kasus', '=', $id)->first();
        // $kasusHukum = KasusHukum::find($id);

        $auth = true;
        return view('userLBH.detail_pengajuan_perkara', ['auth' => $auth, 'pengajuanBantuan' => $pengajuanBantuan]);
    }

    public function terima_pengajuan(Request $request)
    {
        $request->validate([
            'id_kasus' => 'required|integer|exists:kasus_hukum,id_kasus',
        ]);
        
        $PengajuanLBH = KasusHukum::find($request->id_kasus);
        $user = Session::get('user');
        $PengajuanLBH->id_LBH = $user->id_LBH;
        $PengajuanLBH->save();

        return redirect()->back();
    }

}
