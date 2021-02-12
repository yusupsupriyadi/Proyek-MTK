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
        $b = $request->input('b');
        $r2 = $request->input('r2');

        // menentukan persamaan lingkaran dengan pusat O (0,0)
        $hasil = " ($a * $a) + ($b * $b) = 0 ";

        // menentukan titik pusat dan jari-jari
        $hasila = -$a * $a;
        $hasilb = -$b * $b;

        $hasilab = $hasila + $hasilb;
        $total = $hasilab - $r2;
        $total_seluruh = "x2 + y2 $hasila + $hasilb + $total = 0";


        return redirect('/bintang')->with('info', 'Hasil nya adalah :' .$hasil)->with('info2', 'Hasil nya adalah :' .$total_seluruh);

    }
}
