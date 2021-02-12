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
        $a = $request->input('a');
        $b = $request->input('a');
        $r2 = $request->input('r2');

        // menentukan persamaan lingkaran dengan pusat O (0,0)
        $hasil = " ($x1 * $x1) + ($y1 * $y1) = 0 ";

        // menentukan titik pusat dan jari-jari
        $hasila = -a * a;
        $hasilb = -b * b;

        $hasilab = $hasil + $hasilb;
        $total = $hasilab - $r2;
        $total_seluruh = "x2 + y2 $hasil_a + $hasil_b + $total = 0"


        return redirect('/bintang')->with('info', 'Hasil nya adalah :' . $hasil)->with('info', 'Hasil nya adalah :' . $total_seluruh);
    }
}
