<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use App\Models\PilihanPertanyaan;
use App\Models\Respon;
use App\Models\Survei;
use Illuminate\Http\Request;

class SurveiController extends Controller
{
    public function index()
    {
        $pertanyaan = Pertanyaan::all();
        return view('pages.survei', compact('pertanyaan'));
    }

    public function proses_survei(Request $request)
    {
        $this->validate($request, [
            'nama'          => 'required',
            'email'         => 'required',
            'pekerjaan'     => 'required',
            'jenis_kelamin' => 'required',
        ]);

        $respons = Respon::create([
            'nama'          => $request->nama,
            'email'         => $request->email,
            'pekerjaan'     => $request->pekerjaan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'saran'         => $request->saran,
        ]);

        $jumlah_pertanyaan = Pertanyaan::all()->count();

        $i = 1;
        for ($i = 1; $i <= $jumlah_pertanyaan; $i++) {
            $options = PilihanPertanyaan::where('pertanyaan_id', '=', $i)->get();
            $options_ = PilihanPertanyaan::where('pertanyaan_id', '=', $i)->first();

            $insert = Survei::create([
                'pertanyaan_id' => $i,
                'repon_id' => $respons->id,
                'jawaban' => $request->input('jawab_' . $i) == NULL ? $options_->id : $request->input('jawab_' . $i),
            ]);
        }
        // return response()->json($insert);
        if ($insert) {
            return redirect()->route('index');
        } else {
            return redirect()->back()->with('error', 'Gagal Kirim Data');
        }
    }
}
