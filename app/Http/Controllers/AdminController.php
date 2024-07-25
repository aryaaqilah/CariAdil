<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\KasusHukum;
use App\Models\FormPengajuan;
use App\Models\LBH;
use App\Models\TransaksiDonasi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $pengajuan = FormPengajuan::select('*')->get();
        $kasusHukum = KasusHukum::join('LBH', 'LBH.id_LBH', '=', 'kasus_hukum.id_lbh')
        ->join('form_pengajuan', 'form_pengajuan.id_form', '=', 'kasus_hukum.id_form')
        ->select('*')->get();
        $donasi = TransaksiDonasi::select('*')->get();
        $lbh = LBH::select('*')->get();
        $cases = KasusHukum::all();

        return view('admin.dashboard', compact('pengajuan', 'kasusHukum','donasi', 'lbh', 'cases'));
    }

    public function showLogin(){
        return view('admin.login');
    }

    public function login(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where('username', $request->username)->first();

        if ($admin && Hash::check($request->password, $admin->password)){
            $request->session()->regenerate();
            Session::put('admin', $admin);
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->back()->withErrors(['username' => 'Invalid credentials']);
        }
    }

    public function logout() {
        Session::forget('admin');
        return redirect()->route('admin.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function donation()
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        // Halaman Donasi
        $cases = KasusHukum::all();
        $countWeeklyTransactions = 0;
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();
        $biggestDonation = TransaksiDonasi::all()->sortByDesc('nominal')->first();

        foreach ($cases as $case) {
            foreach ($case->approvedTransactions as $transaction) {
                if ($transaction->created_at >= $startOfWeek && $transaction->created_at <= $endOfWeek) {
                    $countWeeklyTransactions++;
                }
            }
        }
        return view('admin.donasi', compact('cases', 'countWeeklyTransactions', 'biggestDonation'));
    }

    public function donation_detail($id){
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $data = KasusHukum::join('form_pengajuan', 'kasus_hukum.id_form', '=', 'form_pengajuan.id_form')
        ->join('lbh', 'lbh.id_LBH', '=', 'kasus_hukum.id_lbh')->select('*')
        ->where('kasus_hukum.id_kasus', '=', $id)->first();

        $donation = TransaksiDonasi::join('kasus_hukum', 'kasus_hukum.id_kasus', '=', 'transaksi_donasi.id_kasus_hukum')
        ->join('bank', 'transaksi_donasi.id_bank', '=', 'bank.id_bank')
        ->select('transaksi_donasi.*', 'bank.nama as nama_bank', 'kasus_hukum.*')
        ->where('kasus_hukum.id_kasus', '=', $id)->get();
        $kasusHukum = KasusHukum::find($id);
        $total = 0;
        foreach ($donation as $d){
            $total+= $d->nominal;
        }
        return view('admin.donasi-detail', compact('data', 'donation', 'total', 'kasusHukum'));
    }

    public function konfirmasi_donasi(){
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $countWeeklyTransactions = 0;
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();
        $cases = KasusHukum::all();
        $donation = TransaksiDonasi::join('bank', 'transaksi_donasi.id_bank', '=', 'bank.id_bank')
                    ->select("transaksi_donasi.*", "bank.nama as namaBank")
                    ->where('status_pembayaran', false)
                    ->get();
        $biggestDonation = TransaksiDonasi::all()->sortByDesc('nominal')->first();

        foreach ($cases as $case) {
            foreach ($case->approvedTransactions as $transaction) {
                if ($transaction->created_at >= $startOfWeek && $transaction->created_at <= $endOfWeek) {
                    $countWeeklyTransactions++;
                }
            }
        }

        $donasiBulanLalu = TransaksiDonasi::whereMonth('created_at', Carbon::now()->subMonth()->month)
                                            ->whereYear('created_at', Carbon::now()->subYear()->year)
                                            ->sum('nominal');
        $donasiBulanIni = TransaksiDonasi::whereMonth('created_at', Carbon::now()->month)
                                            ->whereYear('created_at', Carbon::now()->year)
                                            ->sum('nominal');
        $persentaseKenaikan = 0;
        if($donasiBulanLalu > 0){
            $persentaseKenaikan = (($donasiBulanIni - $donasiBulanLalu)/$donasiBulanLalu)*100;
        }else{
            $persentaseKenaikan = 0;
        }
        return view('admin.donasi-konfirmasi', compact('countWeeklyTransactions', 'donation', 'startOfWeek', 'endOfWeek', 'cases', 'biggestDonation', 'donasiBulanLalu', 'donasiBulanIni', 'persentaseKenaikan'));
    }

    public function terima_donasi($id){
        $donasi = TransaksiDonasi::find($id);
        $donasi->update([
            'status_pembayaran' => true
        ]);

        return redirect('admin/donasi-konfirmasi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function adminRole()
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        // Halaman Role Admin
        $lbh = LBH::all();
        $admins = Admin::all();

        return view('admin.role-admin', compact('lbh', 'admins'));
    }

    public function adminCreate()
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $lbh = LBH::all();
        $admins = Admin::all();

        return view('admin.role-addadmin', compact('lbh', 'admins'));
    }

    public function adminStore(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        Admin::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('admin.admin-role');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function lbhRole()
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        // Halaman Role LBH
        $lbh = LBH::all();
        $admins = Admin::all();

        return view('admin.role-userlbh', compact('lbh', 'admins'));
    }

    public function lbhCreate()
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        // Halaman Tambah LBH
        $lbh = LBH::all();
        $admins = Admin::all();

        return view('admin.role-adduserlbh', compact('lbh', 'admins'));
    }

    public function lbhStore(Request $request)
    {
        // Tambah LBH
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        LBH::create([
            'nama_lbh' => 'LBH ' . $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->telepon,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('admin.lbh-role');
    }


    public function pengajuan_perkara(){
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $cases = FormPengajuan::orderBy('id_form', 'asc')->get();
        $belumVerifikasi = FormPengajuan::whereNull('form_pengajuan.jenis_perkara')->get();
        $verifikasi = FormPengajuan::whereNotNull('form_pengajuan.jenis_perkara')->get();
        return view('admin.perkara-pengajuan', compact('cases', 'belumVerifikasi', 'verifikasi'));
    }

    public function detail_pengajuan_perkara($id){
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $perkara = FormPengajuan::select('*')->where('form_pengajuan.id_form', '=', $id)->first();
        return view('admin.perkara-pengajuan-detail', ['perkara'=>$perkara]);
    }

    public function perkara_berlangsung(){
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $cases = KasusHukum::all();
        return view('admin.perkara-berlangsung', compact('cases'));
    }

    public function detail_perkara_berlangsung($id){
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $case = KasusHukum::join('form_pengajuan', 'form_pengajuan.id_form', '=', 'kasus_hukum.id_form')
        ->select('*')->where('kasus_hukum.id_form', $id)->get();
        return view('admin.perkara-berita', compact('case', 'id'));
    }

    public function detail_perkara_berlangsung_create(Request $request){
        $rules = [
            "title" => "required",
            "description" => "required",
            "image" => "required|mimes:jpg,png,jpeg,gif|max:2048"
        ];

        $message = ["required" => ":attribute wajib diisi!",
        "min" => ":attribute minimal berisi :min karakter!",
        "max" => ":attribute maksimal berisi :max karakter",
        "fileLampiran.mimes" => "file harus berupa gambar dengan format jpg, png, jpeg, atau gif",
        ];

        $validator = Validator::make($request->all(), $rules, $message);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator)->with('danger', 'Pastikan semua field diisi');
        }else{
            if (!Storage::disk('public')->exists('kasus_hukum')) {
                Storage::disk('public')->makeDirectory('kasus_hukum');
            }

            $image = $request->file('image_url');
            $imagePath = Storage::disk('public')->putFileAs('kasus_hukum', $image, $image->getClientOriginalName());

            KasusHukum::create([
                'title' => $request->title,
                'description' => $request->description,
                'image_url' => $imagePath
            ]);

            return redirect('admin.perkara-berlangsung')->with('success', "Tambah berita berhasil!");
        }
    }

    public function terima_pengajuan(Request $request, $id) {
        $formPengajuan = FormPengajuan::find($id);

        $formPengajuan->update([
            'jenis_perkara' => $request->jenis_perkara,
            'status_pengajuan' => 'Accepted'
        ]);

        KasusHukum::create([
            'tanggal' => Carbon::now(),
            'id_form' => $id,
            'target_donasi' => $formPengajuan->target_donasi,
            'status_pengajuan' => 'Pending',
        ]);

        return redirect('admin/pengajuan-perkara');
    }

    public function update_perkara_berlangsung(Request $request, $id) {
        $kasusHukum = KasusHukum::find($id);

        if (!Storage::disk('public')->exists('kasus_hukum')) {
            Storage::disk('public')->makeDirectory('kasus_hukum');
        }
        // return $kasusHukum;

        $image = $request->file('image_url');
        $imagePath = Storage::disk('public')->putFileAs('kasus_hukum', $image, $image->getClientOriginalName());

        $kasusHukum->update([
            'title' => $request->title,
            'description' => $request->description,
            'image_url' => $imagePath, // Use the new image URL
        ]);

        return redirect('admin/perkara-berlangsung');
    }
}
