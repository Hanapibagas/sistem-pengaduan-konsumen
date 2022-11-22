<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoRegisterController extends Controller
{
    public function index()
    {
        return view('pages.info-register');
    }
}
