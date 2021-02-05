<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HafizController extends Controller
{
    public function index()
    {
        return view('backend.hafiz.index');
    }
}
