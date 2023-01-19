<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InformasiPengaduan;
use App\Models\Laporan;
use App\Models\TentangPengadu;
use PDF;
use Illuminate\Http\Request;

class LaporanAdminController extends Controller
{
    public function index()
    {
        return view('pages.admin.laporan.list-laporan');
    }

    public function laporanpengaduan()
    {
        $laporanpengaduan = Laporan::with(['user'])->get();

        return view('pages.admin.laporan.laporan-pengaduan', compact('laporanpengaduan'));
    }

    public function laporaninformasaipengaduan()
    {
        $informasipegaduan = InformasiPengaduan::with(['User'])->get();

        return view('pages.admin.laporan.laporan-informasi-pengadu', compact('informasipegaduan'));
    }

    public function detailpengaduan($id)
    {
        $laporanpengaduan = Laporan::with(['pengadu', 'diadukan', 'tentang_diadukan', 'kronologis', 'jenis_tuntutan', 'permintaan'])->findOrFail($id);

        return view('pages.admin.laporan.details-laporan', compact('laporanpengaduan'));
    }

    public function updatejawabanpengaduan(Request $request, $id)
    {
        $data = Laporan::where('id', $id)->first();

        $data->update([
            "status" => $request->input('status'),
            "keterangan" => $request->input('keterangan'),
        ]);

        return redirect()->route('data-laporan-pengaduan');
    }

    public function cetakpdflaporanpengaduan($id)
    {
        $laporanpengaduan = Laporan::with(['pengadu', 'diadukan', 'tentang_diadukan', 'kronologis', 'jenis_tuntutan'])->findOrFail($id);

        view()->share('laporanpengaduan', $laporanpengaduan);

        $pdf = PDF::loadview('pages.admin.laporan.laporan-pengaduan-pdf');

        return $pdf->stream('Laporan_Data_Pengadu.pdf');
    }

    public function cari(Request $request)
    {
        $bulan = $request->bulan;
        $tahun = $request->tahun;

        $laporanpengaduan = Laporan::with('tentang_diadukan')->whereHas('tentang_diadukan', function ($query) use ($bulan, $tahun) {
            $query->whereMonth('tanggal', $bulan) && $query->whereYear('tanggal', $tahun);
        })->get();

        return view('pages.admin.laporan.laporan-pengaduan', compact('laporanpengaduan'));
    }

    public function cetak_rekeap_laporan_pdf_pdf(Request $request)
    {
        $bulan = $request->bulan;
        $tahun = $request->tahun;
        $laporanpengaduan = Laporan::with('tentang_diadukan')->whereHas('tentang_diadukan', function ($query) use ($bulan, $tahun) {
            $query->whereMonth('tanggal', $bulan) && $query->whereYear('tanggal', $tahun);
        })->get();

        // $laporanpengaduan = Laporan::with(['pengadu', 'diadukan', 'tentang_diadukan', 'kronologis', 'jenis_tuntutan'])->where('');

        // return response()->json($request->bulan);
        view()->share('laporanpengaduan', $laporanpengaduan);

        $pdf = PDF::loadview('pages.admin.laporan.rekap-laporan-pengaduan-pdf')->setPaper('a4', 'landscape');

        return $pdf->stream('Rekap_data_Laporan_Pengadu');
    }
}
