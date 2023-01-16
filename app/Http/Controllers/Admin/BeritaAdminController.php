<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaAdminController extends Controller
{
    public function index()
    {
        $berita = Berita::all();

        return view('pages.admin.berita.index', compact('berita'));
    }

    public function create()
    {
        return view('pages.admin.berita.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('berita', 'public');
        }

        $slug = Str::slug($request->title);
        Berita::create([
            "title" => $request->input('title'),
            "slug" => $slug,
            "tanggal" => $request->input('tanggal'),
            "deskripsi" => $request->input('deskripsi'),
            "gambar" => $file
        ]);

        return redirect()->route('berita-admin.index');
    }

    public function edit($id)
    {
        $berita = Berita::where('id', $id)->first();

        return view('pages.admin.berita.update', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::where('id', $id)->first();

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('berita', 'public');
            if ($berita->gambar && file_exists(storage_path('app/public/' . $berita->gambar))) {
                Storage::delete('public/' . $berita->gambar);
                $file = $request->file('gambar')->store('berita', 'public');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $berita->gambar;
        }

        $slug = Str::slug($request->title);
        $berita->update([
            "title" => $request->input('title'),
            "slug" => $slug,
            "tanggal" => $request->input('tanggal'),
            "deskripsi" => $request->input('deskripsi'),
            "gambar" => $file
        ]);

        return redirect()->route('berita-admin.index');
    }

    public function destroy($id)
    {
        $berita = Berita::where('id', $id)->first();
        if ($berita->gambar && file_exists(storage_path('app/public/' . $berita->gambar))) {
            Storage::delete('public/' . $berita->gambar);
        }

        $berita->delete();

        return redirect()->route('berita-admin.index');
    }
}
