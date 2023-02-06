<?php

namespace App\Http\Controllers;

use App\Models\Kebijakan;
use Illuminate\Http\Request;

class TataCaraPengaduanController extends Controller
{
    public function index()
    {
        $kebijakan = Kebijakan::first();
        return view('pages.tata-cara-pengaduan', compact('kebijakan'));
    }
}
