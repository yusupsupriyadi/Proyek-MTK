<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YusupController extends Controller
{
    public function index()
    {
        return view('backend.yusup.index');
    }
}
