<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengadu;
use Illuminate\Http\Request;

class DataDiriController extends Controller
{
    public function index()
    {
        $items = Pengadu::all();
        return view('pages.admin.pengaduan.index', compact('items'));
    }
}
