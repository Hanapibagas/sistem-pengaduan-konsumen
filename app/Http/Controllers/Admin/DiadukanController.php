<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Diadukan;
use Illuminate\Http\Request;

class DiadukanController extends Controller
{
    public function index()
    {
        $items = Diadukan::all();
        return view('pages.admin.diadukan.index', compact('items'));
    }
}
