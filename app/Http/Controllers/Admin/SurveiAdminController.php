<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Respon;
use App\Models\Survei;
use Illuminate\Http\Request;

class SurveiAdminController extends Controller
{
    public function index()
    {
        $survei = Respon::orderBy('id', 'DESC')->get();

        return view('pages.admin.pertanyaan.index', compact('survei'));
    }

    public function details($id)
    {
        $result = Respon::where('id', '=', $id)->first();

        return view('pages.admin.pertanyaan.detail-survei', compact('result'));
    }
}
