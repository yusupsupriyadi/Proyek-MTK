<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BintangController extends Controller
{
    public function index()
    {
        return view('backend.bintang.index');
    }
    public function Proses(Request $request)
    {
        $x1 = $request->input('x1');
        $y1 = $request->input('y1');
        $r2 = $request->input('z2');

        $hasil = " ($x1 * $x1) + ($y1 * $y1) = 0 ";


        return redirect('/bintang')->with('info', 'Hasil nya adalah :' . $hasil);
    }
}
