<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiregistrasiController extends Controller
{
    public function index()
    {
        return view('pages.info-register');
    }
}
