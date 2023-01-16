<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SurveiController extends Controller
{
    public function index()
    {
        return view('pages.admin.pertanyaan.index');
    }

    public function create()
    {
        return view('pages.admin.pertanyaan.create');
    }
}
