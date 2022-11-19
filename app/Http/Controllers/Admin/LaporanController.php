<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Laporan;
use App\Models\Pengadu;
use App\Models\TentangPengaduan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $items = Laporan::with(['pengadu', 'diadukan', 'tentang_diadukan'])->get();

        return view('pages.admin.laporan.index', compact('items'));
    }

    public function show($id)
    {
        $pengadu = Pengadu::first();
        return view('pages.admin.laporan.details-laporan', compact('pengadu'));
    }
}
