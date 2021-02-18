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
        $hasila = pow($a, 2);
        $hasilb = pow($b, 2);
        $total = $hasila * $hasilb;


        return redirect('/hafiz')->with('info', 'Hasil adalah :' .$total);

    }
}
