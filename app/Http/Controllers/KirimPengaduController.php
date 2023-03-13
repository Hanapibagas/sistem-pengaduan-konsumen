<?php

namespace App\Http\Controllers;

use App\Models\IdentitasKonsumen;
use App\Models\IdentitasPelakuUsaha;
use App\Models\JenisTutan;
use App\Models\Kronologis;
use App\Models\Laporan;
use App\Models\PermintaanKonsumen;
use App\Models\TentangPengadu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KirimPengaduController extends Controller
{
    public function infoguest()
    {
        return view('pages.info-pengadu-guest');
    }

    public function kirimpengadu()
    {
        return view('pages.pengadu');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_lengkap' => 'required|string',
            'umur' => 'required|string',
            'no_identitas' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'alamat' => 'required|string',
            'email' => 'required|string',
            'telpon' => 'required|string',

            'perusahaan'  => 'required|string',
            'alamat' => 'required|string',

            'jenis_produk'  => 'required|string',
            'merek_dagang'  => 'required|string',
            'jenis_pengaduan'  => 'required|string',
            'saksi'  => 'required|string',
            'tanggal'  => 'required|string',
            'lokasi'  => 'required|string',
            'bukti_bukti'  => 'required|string',
            'bukti_pembelian'  => 'required',

            'kronologis'  => 'required|string',
            'permintaan'  => 'required|string',
        ]);

        if ($request->file('bukti_pembelian')) {
            $file = $request->file('bukti_pembelian')->store('tentang-pengadu', 'public');
        }

        $tentangpengadu = TentangPengadu::create([
            "jenis_produk" => $request->input('jenis_produk'),
            "merek_dagang" => $request->input('merek_dagang'),
            "type" => $request->input('type'),
            "jenis_pengaduan" => $request->input('jenis_pengaduan'),
            "saksi" => $request->input('saksi'),
            "tanggal" => $request->input('tanggal'),
            "jam" => $request->input('jam'),
            "lokasi" => $request->input('lokasi'),
            "bukti_bukti" => $request->input('bukti_bukti'),
            "material" => $request->input('material'),
            "fisik" => $request->input('fisik'),
            "psikis" => $request->input('psikis'),
            "bukti_pembelian" => $file
        ]);

        $pengadu = IdentitasKonsumen::create([
            "nama_lengkap" => $request->input('nama_lengkap'),
            "umur" => $request->input('umur'),
            "no_identitas" => $request->input('no_identitas'),
            "jenis_kelamin" => $request->input('jenis_kelamin'),
            "alamat" => $request->input('alamat'),
            "email" => $request->input('email'),
            "telpon" => $request->input('telpon'),
        ]);

        $diadukan = IdentitasPelakuUsaha::create([
            "nama_pelaku_usaha" => $request->input('nama_pelaku_usaha'),
            "perusahaan" => $request->input('perusahaan'),
            "kode_pos" => $request->input('kode_pos'),
            "alamat" => $request->input('alamat'),
        ]);

        $jenistuntuta = JenisTutan::create([
            "jenis_tuntutan" => $request->input('jenis_tuntutan'),
        ]);

        $kronologis = Kronologis::create([
            "kronologis" => $request->input('kronologis'),
        ]);

        $permintaankonsumen = PermintaanKonsumen::create([
            "permintaan" => $request->input('permintaan')
        ]);

        Laporan::create([
            'user_id' => Auth::user()->id,
            'diadukan_id' => $pengadu->id,
            'pengadu_id' => $diadukan->id,
            'kronologis_id' => $jenistuntuta->id,
            'jenis_tuntutan_id' => $kronologis->id,
            'tentang_diadukan_id' => $tentangpengadu->id,
            'permintaan_id' => $permintaankonsumen->id,
        ]);

        return redirect()->route('kirim-pengadu')->with('status', 'Selamat data pengaduan anda telah berhasil terkirim');
    }
}
