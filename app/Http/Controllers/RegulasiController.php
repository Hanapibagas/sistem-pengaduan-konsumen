<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegulasiController extends Controller
{
    public function index()
    {
        return view('pages.kebijkan');
    }
}
