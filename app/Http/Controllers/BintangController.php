<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BintangController extends Controller
{
    public function index()
    {
        return view('backend.bintang.index');
    }
}
