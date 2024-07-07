<?php

namespace App\Http\Controllers;

use App\Models\TransaksiDonasi;
use Illuminate\Http\Request;

class TransaksiDonasiController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // 'title' => 'required|max:255',
            // 'body' => 'required',
        ]);

        TransaksiDonasi::create($validatedData);

        return redirect('/');
    }
}
