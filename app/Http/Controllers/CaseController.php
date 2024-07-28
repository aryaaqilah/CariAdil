<?php

namespace App\Http\Controllers;

use App\Models\FormPengajuan;
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

        // $pidana = KasusHukum::select('*')->where('jenis_perkara', '=', 'Pidana')->get();
        // $perdata = KasusHukum::select('*')->where('jenis_perkara', '=', 'Perdata')->get();

        $pidana = KasusHukum::join('form_pengajuan', 'kasus_hukum.id_form', '=', 'form_pengajuan.id_form')
        ->select('id_kasus', 'title', 'description', 'form_pengajuan.tanggal', 'kasus_hukum.target_donasi', 'kasus_hukum.id_form', 'id_lbh', 'kasus_hukum.status_pengajuan', 'kasus_hukum.image_url', 'kasus_hukum.created_at', 'kasus_hukum.updated_at')
        ->where('form_pengajuan.jenis_perkara', '=', 'Pidana')
        ->where('kasus_hukum.status_pengajuan', '=', 'Accepted')
        ->whereNotNull('kasus_hukum.title')
        ->get();

        $perdata = KasusHukum::join('form_pengajuan', 'kasus_hukum.id_form', '=', 'form_pengajuan.id_form')
        ->select('id_kasus', 'title', 'description', 'form_pengajuan.tanggal', 'kasus_hukum.target_donasi', 'kasus_hukum.id_form', 'id_lbh', 'kasus_hukum.status_pengajuan', 'kasus_hukum.image_url', 'kasus_hukum.created_at', 'kasus_hukum.updated_at')
        ->where('form_pengajuan.jenis_perkara', '=', 'Perdata')
        ->where('kasus_hukum.status_pengajuan', '=', 'Accepted')
        ->whereNotNull('kasus_hukum.title')
        ->get();

        $finalPerdata = array();
        $finalPidana = array();

        foreach ($pidana as $kasus) {
            // dd($kasus);
            $conditions = array('id_kasus_hukum' => $kasus->id_kasus, 'status_pembayaran' => 1);
            $transaksi = TransaksiDonasi::where($conditions)->sum('nominal');
            $data = [
                "id_kasus" => $kasus->id_kasus,
                "title" => $kasus->title,
                "description" => $kasus->description,
                "tanggal" => $kasus->tanggal,
                "target_donasi" => $kasus->target_donasi,
                "id_form" => $kasus->id_form,
                "id_lbh" => $kasus->id_lbh,
                // "jenis_perkara" => $kasus->jenis_perkara,
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
            // dd($transaksi);
            $data = [
                "id_kasus" => $kasus->id_kasus,
                "title" => $kasus->title,
                "description" => $kasus->description,
                "tanggal" => $kasus->tanggal,
                "target_donasi" => $kasus->target_donasi,
                "id_bank" => $kasus->id_bank,
                "id_form" => $kasus->id_form,
                "id_lbh" => $kasus->id_lbh,
                // "jenis_perkara" => $kasus->jenis_perkara,
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
        if (!Session::has('user')) {
            return redirect()->route('login');
        }

        $user = Session::get('user');
        // dd($user->id_LBH);

        // $pidana = FormPengajuan::where('jenis_perkara', '=', 'Pidana')
        // ->where('status_pengajuan', '=', 'Pending')
        // ->get();
        // $perdata = FormPengajuan::where('jenis_perkara', '=', 'Perdata')->where('status_pengajuan', '=', 'Pending')->get();

        $pidana = FormPengajuan::join('kasus_hukum', 'kasus_hukum.id_form', '=', 'form_pengajuan.id_form')
        ->join('LBH', 'kasus_hukum.id_lbh', '=', 'LBH.id_LBH')
        ->select("*")
        ->where('form_pengajuan.jenis_perkara', '=', 'Pidana')
        ->where('kasus_hukum.id_lbh', '=', $user->id_LBH)
        ->where('kasus_hukum.status_pengajuan', '=', 'Accepted')
        ->get();

        $perdata = FormPengajuan::join('kasus_hukum', 'kasus_hukum.id_form', '=', 'form_pengajuan.id_form')
        ->join('LBH', 'kasus_hukum.id_lbh', '=', 'LBH.id_LBH')
        ->select("*")
        ->where('form_pengajuan.jenis_perkara', '=', 'Perdata')
        ->where('kasus_hukum.id_lbh', '=', $user->id_LBH)
        ->where('kasus_hukum.status_pengajuan', '=', 'Accepted')
        ->get();

        // dd($pidana);

        $perkaraBerlangsung = KasusHukum::orderBy('tanggal', 'DESC')
        ->select('*')->get();
        $auth = true;
        return view('userLBH.perkara_berlangsung', ['auth' => $auth, 'perkaraBerlangsung' => $perkaraBerlangsung, 'pidana'=>$pidana, 'perdata'=>$perdata]);
    }

    public function search_perkara(Request $request){
        if (!Session::has('user')) {
            return redirect()->route('login');
        }
        // $kata_kunci = isset($_GET['kata_kunci']) ? $_GET['kata_kunci'] : '';
        $kata_kunci = $request->str;
        // dd($kata_kunci);
        $auth = true;
        $user = Session::get('user');

        $pidana = FormPengajuan::join('kasus_hukum', 'kasus_hukum.id_form', '=', 'form_pengajuan.id_form')
        ->select("*")
        ->where('form_pengajuan.jenis_perkara', '=', 'Pidana')
        ->where('kasus_hukum.id_lbh', '=', $user->id_LBH)
        ->where('kasus_hukum.status_pengajuan', '=', 'Accepted')
        ->where(function($query) use ($kata_kunci) {
            $query->where('form_pengajuan.uraian', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.nama', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.alamat_lengkap', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.kabupaten_kota', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.pekerjaan', 'LIKE', '%'. $kata_kunci.'%');
        })
        ->get();

        $perdata = FormPengajuan::join('kasus_hukum', 'kasus_hukum.id_form', '=', 'form_pengajuan.id_form')
        ->select("*")
        ->where('form_pengajuan.jenis_perkara', '=', 'Perdata')
        ->where('kasus_hukum.id_lbh', '=', $user->id_LBH)
        ->where('kasus_hukum.status_pengajuan', '=', 'Accepted')
        ->where(function($query) use ($kata_kunci) {
            $query->where('form_pengajuan.uraian', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.nama', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.alamat_lengkap', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.kabupaten_kota', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.pekerjaan', 'LIKE', '%'. $kata_kunci.'%');
        })
        ->get();

        // $pidana = KasusHukum::join('form_pengajuan', 'kasus_hukum.id_form', '=', 'form_pengajuan.id_form')
        // ->select('id_kasus', 'title', 'description', 'form_pengajuan.tanggal', 'kasus_hukum.target_donasi', 'kasus_hukum.id_form', 'id_lbh', 'kasus_hukum.status_pengajuan', 'kasus_hukum.image_url', 'kasus_hukum.created_at', 'kasus_hukum.updated_at')
        // ->where('form_pengajuan.jenis_perkara', '=', 'Pidana')
        // ->where('kasus_hukum.status_pengajuan', '=', 'Proses')
        // ->where(function($query) use ($kata_kunci) {
        //     $query->where('form_pengajuan.uraian', 'LIKE', '%'. $kata_kunci.'%')
        //           ->orWhere('form_pengajuan.nama', 'LIKE', '%'. $kata_kunci.'%')
        //           ->orWhere('form_pengajuan.alamat_lengkap', 'LIKE', '%'. $kata_kunci.'%')
        //           ->orWhere('form_pengajuan.kabupaten_kota', 'LIKE', '%'. $kata_kunci.'%')
        //           ->orWhere('form_pengajuan.pekerjaan', 'LIKE', '%'. $kata_kunci.'%');
        // })
        // ->get();

        // $perdata = KasusHukum::join('form_pengajuan', 'kasus_hukum.id_form', '=', 'form_pengajuan.id_form')
        // ->select('id_kasus', 'title', 'description', 'form_pengajuan.tanggal', 'kasus_hukum.target_donasi', 'kasus_hukum.id_form', 'id_lbh', 'kasus_hukum.status_pengajuan', 'kasus_hukum.image_url', 'kasus_hukum.created_at', 'kasus_hukum.updated_at')
        // ->where('form_pengajuan.jenis_perkara', '=', 'Perdata')
        // ->where('status_pengajuan', '=', 'Proses')
        // ->where('title', 'LIKE', '%'. $kata_kunci.'%')
        // ->get();

        // dd($pidana);

        // $finalPerdata = array();
        // $finalPidana = array();


        // foreach ($pidana as $kasus) {
        //     $conditions = array('id_kasus_hukum' => $kasus->id_kasus, 'status_pembayaran' => 1);
        //     $transaksi = TransaksiDonasi::where($conditions)->sum('nominal');
        //     $data = [
        //         "id_kasus" => $kasus->id_kasus,
        //         "title" => $kasus->title,
        //         "description" => $kasus->description,
        //         "tanggal" => $kasus->tanggal,
        //         "target_donasi" => $kasus->target_donasi,
        //         "id_bank" => $kasus->id_bank,
        //         "id_form" => $kasus->id_form,
        //         "id_lbh" => $kasus->id_lbh,
        //         "jenis_perkara" => $kasus->jenis_perkara,
        //         "status_pengajuan" => $kasus->status_pengajuan,
        //         "image_url" => $kasus->image_url,
        //         "created_at" => $kasus->created_at,
        //         "updated_at" => $kasus->updated_at,
        //         "total" => $transaksi,
        //         "nama_lbh" => LBH::select('nama_lbh')->where('id_LBH', '=', $kasus->id_lbh)->get()
        //     ];
        //     array_push($finalPidana, $data);
        // }


        // foreach ($perdata as $kasus) {
        //     // $transaksi = TransaksiDonasi::where('id_kasus_hukum', $kasus->id_kasus)->where('status_pembayaran', 1)->sum('nominal');
        //     $conditions = array('id_kasus_hukum' => $kasus->id_kasus, 'status_pembayaran' => 1);
        //     $transaksi = TransaksiDonasi::where($conditions)->sum('nominal');
        //     $data = [
        //         "id_kasus" => $kasus->id_kasus,
        //         "title" => $kasus->title,
        //         "description" => $kasus->description,
        //         "tanggal" => $kasus->tanggal,
        //         "target_donasi" => $kasus->target_donasi,
        //         "id_bank" => $kasus->id_bank,
        //         "id_form" => $kasus->id_form,
        //         "id_lbh" => $kasus->id_lbh,
        //         "jenis_perkara" => $kasus->jenis_perkara,
        //         "status_pengajuan" => $kasus->status_pengajuan,
        //         "image_url" => $kasus->image_url,
        //         "created_at" => $kasus->created_at,
        //         "updated_at" => $kasus->updated_at,
        //         "total" => $transaksi,
        //         "nama_lbh" => LBH::select('nama_lbh')->where('id_LBH', '=', $kasus->id_lbh)->get()
        //     ];
        //     array_push($finalPerdata, $data);
        // }

        // dd($kasus);
        return view('userLBH.perkara_berlangsung', ['pidana' => $pidana, 'perdata' => $perdata, 'auth' => $auth]);
    }

    public function detail_perkara_berlangsung($id){
        if (!Session::has('user')) {
            return redirect()->route('login');
        }

        $perkaraBerlangsung = KasusHukum::join('form_pengajuan', 'form_pengajuan.id_form', '=', 'kasus_hukum.id_form')
        ->select('*', 'kasus_hukum.image_url AS image')
        ->where('kasus_hukum.id_kasus', '=', $id)->first();

        $kasusHukum = KasusHukum::find($id);

        $image = KasusHukum::join('form_pengajuan', 'form_pengajuan.id_form', '=', 'kasus_hukum.id_form')
        ->select('kasus_hukum.image_url')
        ->where('kasus_hukum.id_kasus', '=', $id)->first();

        $progress = ProgressKasusHukum::select('*')->where('id_kasus', '=', $id)->get();
        // dd($progress);
        $transaksi = TransaksiDonasi::select('*')->where('id_kasus_hukum', '=', $id)->where('status_pembayaran','=',1)->get();
        $total = 0;
        foreach ($transaksi as $trans){
            $total += $trans->nominal;
        }
        $auth = true;
        return view('userLBH.detail_perkara_berlangsung', ['auth'=> $auth, 'image' => $perkaraBerlangsung['image'], 'perkaraBerlangsung' => $perkaraBerlangsung, 'progress' => $progress, 'total' => $total, 'kasusHukum' => $kasusHukum, 'image' => $image]);
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

        $pidana = KasusHukum::join('form_pengajuan', 'kasus_hukum.id_form', '=', 'form_pengajuan.id_form')
        ->select('*')
        ->where('form_pengajuan.jenis_perkara', '=', 'Pidana')
        ->where('kasus_hukum.status_pengajuan', '=', 'Accepted')
        ->where('form_pengajuan.status_pengajuan', '=', 'Accepted')
        ->where(function($query) use ($kata_kunci) {
            $query->where('form_pengajuan.uraian', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.nama', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.alamat_lengkap', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.kabupaten_kota', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.pekerjaan', 'LIKE', '%'. $kata_kunci.'%');
        })
        ->get();

        // dd($pidana);

        $perdata = KasusHukum::join('form_pengajuan', 'kasus_hukum.id_form', '=', 'form_pengajuan.id_form')
        ->select('*')
        ->where('form_pengajuan.jenis_perkara', '=', 'Perdata')
        ->where('kasus_hukum.status_pengajuan', '=', 'Accepted')
        ->where('form_pengajuan.status_pengajuan', '=', 'Accepted')
        ->where(function($query) use ($kata_kunci) {
            $query->where('form_pengajuan.uraian', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.nama', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.alamat_lengkap', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.kabupaten_kota', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.pekerjaan', 'LIKE', '%'. $kata_kunci.'%');
        })
        ->get();

        // $pidana = KasusHukum::select('*')->where('jenis_perkara', '=', 'Pidana')->where('title', 'LIKE', '%'. $kata_kunci.'%')->get();
        // $perdata = KasusHukum::select('*')->where('jenis_perkara', '=', 'Perdata')->where('title', 'LIKE', '%'. $kata_kunci.'%')->get();
        // // dd($perkara);

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
        if (!Session::has('user')) {
            return redirect()->route('login');
        }
        // $pidana = KasusHukum::join('form_pengajuan', 'kasus_hukum.id_form', '=', 'form_pengajuan.id_form')
        // ->select('id_kasus', 'title', 'description', 'form_pengajuan.tanggal', 'kasus_hukum.target_donasi', 'kasus_hukum.id_form', 'id_lbh', 'status_pengajuan', 'kasus_hukum.image_url', 'kasus_hukum.created_at', 'kasus_hukum.updated_at')
        // ->where('form_pengajuan.jenis_perkara', '=', 'Pidana')
        // ->whereNULL('id_lbh')2121`
        // ->get();

        $pidana = KasusHukum::join('form_pengajuan', 'kasus_hukum.id_form', '=', 'form_pengajuan.id_form')
        ->select('*')
        ->where('form_pengajuan.jenis_perkara', '=', 'Pidana')
        ->where('kasus_hukum.status_pengajuan', '=', 'Pending')
        ->where('form_pengajuan.status_pengajuan', '=', 'Accepted')
        ->whereNULL('id_lbh')
        ->get();

        $perdata = KasusHukum::join('form_pengajuan', 'kasus_hukum.id_form', '=', 'form_pengajuan.id_form')
        ->select('*')
        ->where('form_pengajuan.jenis_perkara', '=', 'Perdata')
        ->where('kasus_hukum.status_pengajuan', '=', 'Pending')
        ->where('form_pengajuan.status_pengajuan', '=', 'Accepted')
        ->whereNULL('id_lbh')
        ->get();

        // dd($perdata);

        // $pidana = FormPengajuan::where('jenis_perkara', '=', 'Pidana')->where('status_pengajuan', '=', 'Pending')->get();
        // $perdata = FormPengajuan::where('jenis_perkara', '=', 'Perdata')->where('status_pengajuan', '=', 'Pending')->get();

        // $pengajuanBantuan = KasusHukum::whereNULL('id_lbh')->orderBy('tanggal', 'DESC')
        // ->join('kasus_hukum', 'form_pengajuan.id_form', '=', 'kasus_hukum.id_form')
        // ->select('*')->get();
        // ->select('form_pengajuan.*', 'kasus_hukum.jenis_perkara')->get();
        $auth = true;

        // dd($pengajuanBantuan);

        return view('userLBH.pengajuan_perkara', ['pidana' => $pidana, 'perdata' => $perdata, 'auth' => $auth]);
    }

    public function search_pengajuan(Request $request){
        if (!Session::has('user')) {
            return redirect()->route('login');
        }
        // $kata_kunci = isset($_GET['kata_kunci']) ? $_GET['kata_kunci'] : '';
        $kata_kunci = $request->str;
        // dd($kata_kunci);
        $auth = true;

        $pidana = KasusHukum::join('form_pengajuan', 'kasus_hukum.id_form', '=', 'form_pengajuan.id_form')
        ->select('*')
        ->where('form_pengajuan.jenis_perkara', '=', 'Pidana')
        ->where('kasus_hukum.status_pengajuan', '=', 'Pending')
        ->where('form_pengajuan.status_pengajuan', '=', 'Accepted')
        ->whereNull('id_lbh')
        ->where(function($query) use ($kata_kunci) {
            $query->where('form_pengajuan.uraian', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.nama', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.alamat_lengkap', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.kabupaten_kota', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.pekerjaan', 'LIKE', '%'. $kata_kunci.'%');
        })
        ->get();


        $perdata = KasusHukum::join('form_pengajuan', 'kasus_hukum.id_form', '=', 'form_pengajuan.id_form')
        ->select('*')
        ->where('form_pengajuan.jenis_perkara', '=', 'Perdata')
        ->where('kasus_hukum.status_pengajuan', '=', 'Pending')
        ->where('form_pengajuan.status_pengajuan', '=', 'Accepted')
        ->whereNull('id_lbh')
        ->where(function($query) use ($kata_kunci) {
            $query->where('form_pengajuan.uraian', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.nama', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.alamat_lengkap', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.kabupaten_kota', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.pekerjaan', 'LIKE', '%'. $kata_kunci.'%');
        })
        ->get();


        // dd($pidana);

        // $finalPerdata = array();
        // $finalPidana = array();


        // foreach ($pidana as $kasus) {
        //     $conditions = array('id_kasus_hukum' => $kasus->id_kasus, 'status_pembayaran' => 1);
        //     $transaksi = TransaksiDonasi::where($conditions)->sum('nominal');
        //     $data = [
        //         "id_kasus" => $kasus->id_kasus,
        //         "title" => $kasus->title,
        //         "description" => $kasus->description,
        //         "tanggal" => $kasus->tanggal,
        //         "target_donasi" => $kasus->target_donasi,
        //         "id_bank" => $kasus->id_bank,
        //         "id_form" => $kasus->id_form,
        //         "id_lbh" => $kasus->id_lbh,
        //         "jenis_perkara" => $kasus->jenis_perkara,
        //         "status_pengajuan" => $kasus->status_pengajuan,
        //         "image_url" => $kasus->image_url,
        //         "created_at" => $kasus->created_at,
        //         "updated_at" => $kasus->updated_at,
        //         "total" => $transaksi,
        //         "nama_lbh" => LBH::select('nama_lbh')->where('id_LBH', '=', $kasus->id_lbh)->get()
        //     ];
        //     array_push($finalPidana, $data);
        // }


        // foreach ($perdata as $kasus) {
        //     // $transaksi = TransaksiDonasi::where('id_kasus_hukum', $kasus->id_kasus)->where('status_pembayaran', 1)->sum('nominal');
        //     $conditions = array('id_kasus_hukum' => $kasus->id_kasus, 'status_pembayaran' => 1);
        //     $transaksi = TransaksiDonasi::where($conditions)->sum('nominal');
        //     $data = [
        //         "id_kasus" => $kasus->id_kasus,
        //         "title" => $kasus->title,
        //         "description" => $kasus->description,
        //         "tanggal" => $kasus->tanggal,
        //         "target_donasi" => $kasus->target_donasi,
        //         "id_bank" => $kasus->id_bank,
        //         "id_form" => $kasus->id_form,
        //         "id_lbh" => $kasus->id_lbh,
        //         "jenis_perkara" => $kasus->jenis_perkara,
        //         "status_pengajuan" => $kasus->status_pengajuan,
        //         "image_url" => $kasus->image_url,
        //         "created_at" => $kasus->created_at,
        //         "updated_at" => $kasus->updated_at,
        //         "total" => $transaksi,
        //         "nama_lbh" => LBH::select('nama_lbh')->where('id_LBH', '=', $kasus->id_lbh)->get()
        //     ];
        //     array_push($finalPerdata, $data);
        // }

        // dd($kasus);
        return view('userLBH.pengajuan_perkara', ['pidana' => $pidana, 'perdata' => $perdata, 'auth' => $auth]);
    }

    public function detail_pengajuan_bantuan($id)
    {
        if (!Session::has('user')) {
            return redirect()->route('login');
        }

        $pengajuanBantuan = KasusHukum::join('form_pengajuan', 'form_pengajuan.id_form', '=', 'kasus_hukum.id_form')
        // ->join('transaksi_donasi', 'kasus_hukum.id_kasus', '=', 'transaksi_donasi.id_kasus_hukum')
        ->select('*')
        ->where('kasus_hukum.id_form', '=', $id)->first();
        // $kasusHukum = KasusHukum::find($id);

        $auth = true;
        return view('userLBH.detail_pengajuan_perkara', ['auth' => $auth, 'pengajuanBantuan' => $pengajuanBantuan, 'id_form' => $id]);
    }

    public function terima_pengajuan(Request $request)
    {
        $request->validate([
            'id_form' => 'required|integer|exists:form_pengajuan',
        ]);

        $user = Session::get('user');

        KasusHukum::where('id_form', $request->id_form)->update([
            'id_lbh' => $user->id_LBH,
        ]);

        KasusHukum::where('id_form', $request->id_form)->update([
            'status_pengajuan' => 'Accepted'
        ]);

        return redirect('/lbh/pengajuan-bantuan-hukum')->with('success', 'Pengajuan berhasil diterima');
    }

    public function tolak_pengajuan($id) {
        KasusHukum::where('id_form', $id)->update([
            'id_form' => NULL,
        ]);

        return 'tolak ' . $id;
    }

    public function riwayat_kasus(){
        if (!Session::has('user')) {
            return redirect()->route('login');
        }

        $pidana = KasusHukum::join('form_pengajuan', 'kasus_hukum.id_form', '=', 'form_pengajuan.id_form')
        ->select('*')
        ->where('form_pengajuan.jenis_perkara', '=', 'Pidana')
        ->where('kasus_hukum.status_pengajuan', '=', 'Selesai')
        ->get();

        $perdata = KasusHukum::join('form_pengajuan', 'kasus_hukum.id_form', '=', 'form_pengajuan.id_form')
        ->select('*')
        ->where('form_pengajuan.jenis_perkara', '=', 'Perdata')
        ->where('kasus_hukum.status_pengajuan', '=', 'Selesai')
        ->get();

        $pengajuanBantuan = KasusHukum::whereNULL('id_lbh')->orderBy('tanggal', 'DESC')
        // ->join('kasus_hukum', 'form_pengajuan.id_form', '=', 'kasus_hukum.id_form')
        ->select('*')->get();
        // ->select('form_pengajuan.*', 'kasus_hukum.jenis_perkara')->get();
        $auth = true;

        // dd($pengajuanBantuan);

        return view('userLBH.riwayat', ['pengajuanBantuan' => $pengajuanBantuan, 'pidana' => $pidana, 'perdata' => $perdata, 'auth' => $auth]);
    }

    public function search_riwayat(Request $request){
        if (!Session::has('user')) {
            return redirect()->route('login');
        }
        // $kata_kunci = isset($_GET['kata_kunci']) ? $_GET['kata_kunci'] : '';
        $kata_kunci = $request->str;
        // dd($kata_kunci);
        $auth = true;

        $pidana = KasusHukum::join('form_pengajuan', 'kasus_hukum.id_form', '=', 'form_pengajuan.id_form')
        ->select('*')
        ->where('form_pengajuan.jenis_perkara', '=', 'Pidana')
        ->where('kasus_hukum.status_pengajuan', '=', 'Selesai')
        ->where(function($query) use ($kata_kunci) {
            $query->where('form_pengajuan.uraian', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.nama', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.alamat_lengkap', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.kabupaten_kota', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.pekerjaan', 'LIKE', '%'. $kata_kunci.'%');
        })
        ->get();

        $perdata = KasusHukum::join('form_pengajuan', 'kasus_hukum.id_form', '=', 'form_pengajuan.id_form')
        ->select('*')
        ->where('form_pengajuan.jenis_perkara', '=', 'Perdata')
        ->where('kasus_hukum.status_pengajuan', '=', 'Selesai')
        ->where(function($query) use ($kata_kunci) {
            $query->where('form_pengajuan.uraian', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.nama', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.alamat_lengkap', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.kabupaten_kota', 'LIKE', '%'. $kata_kunci.'%')
                  ->orWhere('form_pengajuan.pekerjaan', 'LIKE', '%'. $kata_kunci.'%');
        })
        ->get();

        // $pidana = KasusHukum::join('form_pengajuan', 'kasus_hukum.id_form', '=', 'form_pengajuan.id_form')
        // ->select('id_kasus', 'title', 'description', 'form_pengajuan.tanggal', 'kasus_hukum.target_donasi', 'kasus_hukum.id_form', 'id_lbh', 'status_pengajuan', 'kasus_hukum.image_url', 'kasus_hukum.created_at', 'kasus_hukum.updated_at')
        // ->where('form_pengajuan.jenis_perkara', '=', 'Pidana')
        // ->where('status_pengajuan', '=', 'Selesai')
        // ->where('title', 'LIKE', '%'. $kata_kunci.'%')
        // ->get();

        // $perdata = KasusHukum::join('form_pengajuan', 'kasus_hukum.id_form', '=', 'form_pengajuan.id_form')
        // ->select('id_kasus', 'title', 'description', 'form_pengajuan.tanggal', 'kasus_hukum.target_donasi', 'kasus_hukum.id_form', 'id_lbh', 'status_pengajuan', 'kasus_hukum.image_url', 'kasus_hukum.created_at', 'kasus_hukum.updated_at')
        // ->where('form_pengajuan.jenis_perkara', '=', 'Perdata')
        // ->where('status_pengajuan', '=', 'Selesai')
        // ->where('title', 'LIKE', '%'. $kata_kunci.'%')
        // ->get();

        // dd($pidana);

        // $finalPerdata = array();
        // $finalPidana = array();


        // foreach ($pidana as $kasus) {
        //     $conditions = array('id_kasus_hukum' => $kasus->id_kasus, 'status_pembayaran' => 1);
        //     $transaksi = TransaksiDonasi::where($conditions)->sum('nominal');
        //     $data = [
        //         "id_kasus" => $kasus->id_kasus,
        //         "title" => $kasus->title,
        //         "description" => $kasus->description,
        //         "tanggal" => $kasus->tanggal,
        //         "target_donasi" => $kasus->target_donasi,
        //         "id_bank" => $kasus->id_bank,
        //         "id_form" => $kasus->id_form,
        //         "id_lbh" => $kasus->id_lbh,
        //         "jenis_perkara" => $kasus->jenis_perkara,
        //         "status_pengajuan" => $kasus->status_pengajuan,
        //         "image_url" => $kasus->image_url,
        //         "created_at" => $kasus->created_at,
        //         "updated_at" => $kasus->updated_at,
        //         "total" => $transaksi,
        //         "nama_lbh" => LBH::select('nama_lbh')->where('id_LBH', '=', $kasus->id_lbh)->get()
        //     ];
        //     array_push($finalPidana, $data);
        // }


        // foreach ($perdata as $kasus) {
        //     // $transaksi = TransaksiDonasi::where('id_kasus_hukum', $kasus->id_kasus)->where('status_pembayaran', 1)->sum('nominal');
        //     $conditions = array('id_kasus_hukum' => $kasus->id_kasus, 'status_pembayaran' => 1);
        //     $transaksi = TransaksiDonasi::where($conditions)->sum('nominal');
        //     $data = [
        //         "id_kasus" => $kasus->id_kasus,
        //         "title" => $kasus->title,
        //         "description" => $kasus->description,
        //         "tanggal" => $kasus->tanggal,
        //         "target_donasi" => $kasus->target_donasi,
        //         "id_bank" => $kasus->id_bank,
        //         "id_form" => $kasus->id_form,
        //         "id_lbh" => $kasus->id_lbh,
        //         "jenis_perkara" => $kasus->jenis_perkara,
        //         "status_pengajuan" => $kasus->status_pengajuan,
        //         "image_url" => $kasus->image_url,
        //         "created_at" => $kasus->created_at,
        //         "updated_at" => $kasus->updated_at,
        //         "total" => $transaksi,
        //         "nama_lbh" => LBH::select('nama_lbh')->where('id_LBH', '=', $kasus->id_lbh)->get()
        //     ];
        //     array_push($finalPerdata, $data);
        // }

        // dd($kasus);
        return view('userLBH.riwayat', ['pidana' => $pidana, 'perdata' => $perdata, 'auth' => $auth]);
    }

    public function detail_riwayat_kasus($id)
    {
        if (!Session::has('user')) {
            return redirect()->route('login');
        }

        $perkaraBerlangsung = KasusHukum::join('form_pengajuan', 'form_pengajuan.id_form', '=', 'kasus_hukum.id_form')
        // ->join('transaksi_donasi', 'kasus_hukum.id_kasus', '=', 'transaksi_donasi.id_kasus_hukum')
        ->select('*', 'kasus_hukum.image_url AS image')
        ->where('id_kasus', '=', $id)->first();
        $kasusHukum = KasusHukum::find($id);
        $progress = ProgressKasusHukum::select('*')->where('id_kasus', '=', $id)->get();
        $transaksi = TransaksiDonasi::select('*')->where('id_kasus_hukum', '=', $id)->where('status_pembayaran','=',1)->get();
        $total = 0;
        foreach ($transaksi as $trans){
            $total += $trans->nominal;
        }
        $auth = true;
        return view('userLBH.detail_riwayat_kasus', ['auth'=> $auth, 'image' => $perkaraBerlangsung['image'], 'perkaraBerlangsung' => $perkaraBerlangsung, 'progress' => $progress, 'total' => $total, 'kasusHukum' => $kasusHukum]);
    }

}
