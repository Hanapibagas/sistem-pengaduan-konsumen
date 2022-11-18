<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TentangPengaduan;
use Illuminate\Http\Request;

class TentangDiadukanController extends Controller
{
    public function index()
    {
        $items = TentangPengaduan::all();
        return view('pages.admin.tentang-diadukan.index', compact('items'));
    }
}
