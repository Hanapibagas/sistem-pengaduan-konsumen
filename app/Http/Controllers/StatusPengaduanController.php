<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class StatusPengaduanController extends Controller
{
    public function index()
    {
        $items = Laporan::with(['pengadu', 'diadukan', 'tentang_diadukan'])->get();

        return view('pages.info-pengaduan', compact('items'));
    }

    public function guest()
    {
        return view('pages.info-pengadu-guest');
    }
}
