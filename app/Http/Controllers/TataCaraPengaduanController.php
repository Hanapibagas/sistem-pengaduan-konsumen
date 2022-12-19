<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TataCaraPengaduanController extends Controller
{
    public function index()
    {
        return view('pages.tata-cara-pengaduan');
    }
}
