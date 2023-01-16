<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Svg\Tag\Rect;
use Illuminate\Validation\ValidationException;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = User::all();

        return view('pages.admin.akun.index', compact('pengguna'));
    }

    public function create()
    {
        return view('pages.admin.akun.create');
    }

    public function register(Request $request)
    {
        User::create([
            'email' => request('email'),
            'roles' => request('roles'),
            'password' => bcrypt('12345678'),
        ]);

        return redirect()->route('pengguna-akun');
    }

    public function edit($id)
    {
        $pengguna = User::where('id', $id)->first();

        return view('pages.admin.akun.update', compact('pengguna'));
    }

    public function delete(Request $request, $id)
    {
        $pengguna = User::where('id', $id)->first();
        $pengguna->delete();

        return redirect()->route('pengguna-akun');
    }
}
