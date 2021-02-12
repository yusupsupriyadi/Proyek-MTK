<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HafizController extends Controller
{
    public function index()
    {
        return view('backend.hafiz.index');
    }
    public function Proses(Request $request)
    {
        $a = $request->input('a');
        $b = $request->input('b');
        $r2 = $request->input('r2');

        // menentukan persamaan lingkaran dengan pusat 
        $hasil = " ($a * $a) + ($b * $b) = 0 ";
        $hasila = " pow($x * $a) + pow($y * $b) "



        return redirect('/bintang')->with('info', 'Hasil nya adalah :' .$hasil)->with('info2', 'Hasil nya adalah :' .$total_seluruh);

    }
}
