<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Diadukan;
use App\Models\Pengadu;
use App\Models\TentangPengaduan;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard', [
            'pengadu' => Pengadu::count(),
            'diadukan' => Diadukan::count(),
            'tentang_pengadu' => TentangPengaduan::count(),
        ]);
    }
}
