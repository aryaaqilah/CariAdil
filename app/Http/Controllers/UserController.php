<?php

namespace App\Http\Controllers;

use App\Models\LBH;
use App\Models\KasusHukum;
use Illuminate\Http\Request;
use App\Models\ProgressKasusHukum;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Session::get('user');

        $kasusHukum = KasusHukum::orderBy('tanggal', 'DESC')->where('id_LBH', '=', $user->id_LBH)->take(2)->get();
        $jadwal = ProgressKasusHukum::join('kasus_hukum', 'kasus_hukum.id_kasus', '=', 'progress_kasus_hukum.id_kasus')
        ->select('*')
        ->where('kasus_hukum.id_lbh', '=', $user->id_LBH)
        ->orderBy('tanggal', 'DESC')
        ->take(3)
        ->get();
        dd($jadwal);
        $auth = true;

        return view('userLBH.beranda', ['list_kasus_hukum' => $kasusHukum, 'jadwal' => $jadwal, 'auth' => $auth]);
    }

    public function showLogin(){
        return view('userLBH.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = LBH::where('email', $request->email)->first();
        // $hashedPassword = Hash::make('plain-text-password');
        // $user->password = $hashedPassword;
        // $user->save();

        if ($user && Hash::check($request->password, $user->password)) {
            $request->session()->regenerate();
            Session::put('user', $user);
            // dd($user);
            return redirect()->route('beranda');
        } else {
            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        }
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
