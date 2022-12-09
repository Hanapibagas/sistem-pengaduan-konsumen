<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataDiriRequest;
use App\Models\Diadukan;
use App\Models\Laporan;
use App\Models\Pengadu;
use App\Models\TentangPengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataDiriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.data-diri');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataDiriRequest $request)
    {
        if ($request->file('bukti_diri')) {
            $file = $request->file('bukti_diri')->store('gambar', 'public');
        }

        $pengadu = Pengadu::create([
            "nama" => $request->input('nama'),
            "umur" => $request->input('umur'),
            "jenis_kelamin" => $request->input('jenis_kelamin'),
            "alamat" => $request->input('alamat'),
            "telepon" => $request->input('telepon'),
            "bukti_diri" => $file,
        ]);

        $diadukan = Diadukan::create([
            "nama_pemilik" => $request->input('nama_pemilik'),
            "perusahaan" => $request->input('perusahaan'),
            "alamat" => $request->input('alamat'),
            "kode_pos" => $request->input('kode_pos'),
            "telepon" => $request->input('telepon'),
            "faximile" => $request->input('faximile'),
        ]);

        $tentangpengadu = TentangPengaduan::create([
            "jenis_pengaduan" => $request->input('jenis_pengaduan'),
            "tanggal" => $request->input('tanggal'),
            "jam" => $request->input('jam'),
            "lokasi" => $request->input('lokasi'),
            "bukti_pembelian" => $request->input('bukti_pembelian'),
            "bukti_saksi" => $request->input('bukti_saksi'),
            "barang_bukti" => $request->input('barang_bukti'),
            "bentuk_kerugian" => $request->input('bentuk_kerugian'),
        ]);

        Laporan::create([
            'user_id' => Auth::user()->id,
            'diadukan_id' => $pengadu->id,
            'pengadu_id' => $diadukan->id,
            'tentang_diadukan_id' => $tentangpengadu->id,
        ]);

        return redirect()->route('data-diri.index')->with('status', 'Selamat data diri anda berhasil terkirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
