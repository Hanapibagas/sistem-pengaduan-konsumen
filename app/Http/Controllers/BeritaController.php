<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('pages.berita', compact('berita'));
    }

    public function detail_berita($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('pages.detail-berita', compact('berita'));
    }
}
