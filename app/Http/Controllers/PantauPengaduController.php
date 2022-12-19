<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PantauPengaduController extends Controller
{
    public function infoguest()
    {
        return view('pages.info-pengadu-guest');
    }

    public function pantaupengaduan()
    {
        // $items = Laporan::with(['pengadu', 'diadukan', 'tentang_diadukan'])->get();
        return view('pages.info-pengaduan');
    }
}
