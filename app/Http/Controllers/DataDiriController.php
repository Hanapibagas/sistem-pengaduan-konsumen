<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataDiriRequest;
use App\Models\Laporan;
use App\Models\Pengadu;
use Illuminate\Http\Request;

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

        Laporan::create([
            'diadukan_id' => $pengadu->id,
            'pengadu_id' => $pengadu->id,
            'tentang_diadukan_id' => $pengadu->id,
        ]);

        return redirect()->route('data-diadukan.index')->with('status', 'Selamat data diri anda berhasil terkirim');
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
