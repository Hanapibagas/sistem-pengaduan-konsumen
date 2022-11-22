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
        $pengadu = Laporan::with(['pengadu', 'diadukan', 'tentang_diadukan'])->findOrFail($id);
        return view('pages.admin.laporan.details-laporan', compact('pengadu'));
    }

    public function update(Request $request, $id)
    {
        $data = Laporan::where('id', $id)->first();

        $data->update([
            "status" => $request->input('status')
        ]);

        return redirect()->route('laporan.index');
    }
}
