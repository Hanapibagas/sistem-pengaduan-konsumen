<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataDiadukanRequest;
use App\Models\Diadukan;
use App\Models\Laporan;
use Illuminate\Http\Request;

class DiadukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.data-diadukan');
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
    public function store(DataDiadukanRequest $request)
    {
        Diadukan::create([
            "nama_pemilik" => $request->input('nama_pemilik'),
            "perusahaan" => $request->input('perusahaan'),
            "alamat" => $request->input('alamat'),
            "kode_pos" => $request->input('kode_pos'),
            "telepon" => $request->input('telepon'),
            "faximile" => $request->input('faximile'),
        ]);

        // Laporan::create([
        //     'diadukan_id' => $diadukan->id,
        //     'pengadu_id' => $diadukan->id,
        //     'diadukan_id' => $diadukan->id,
        // ]);


        return redirect()->route('data-tentang-diadukan.index')->with('status', 'Selamat data yang anda adukan berhasil terkirim');
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
