<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasaiPengaduanController extends Controller
{
    public function index()
    {
        return view('pages.kirim-informasi');
    }
}
