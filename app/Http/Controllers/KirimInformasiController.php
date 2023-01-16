<?php

namespace App\Http\Controllers;

use App\Models\InformasiPengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KirimInformasiController extends Controller
{
    public function kiriminformasi()
    {
        return view('pages.kirim-informasi');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        InformasiPengaduan::create([
            "user_id" => Auth::user()->id,
            "informasi_pengaduan" => $request->input('informasi_pengaduan')
        ]);

        return redirect()->route('kirim-informasi')->with('status', 'Selamat informasi anda telah berhasil terkirim');
    }
}
