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
        $hasil = $r2 * $r2;

        // menentukan titik pusat dan jari-jari
        $hasila = -$a * $a;
        $hasilb = -$b * $b;

        $hasilab = $hasila + $hasilb;
        $total = $hasilab - $r2;
        $total_seluruh = "x2 + y2 $hasila + $hasilb + $total = 0";


        // return redirect('/bintang')->with('info', 'Hasil  O (0,0) adalah :' .$hasil)->with('info2', 'Hasil menentukan titik pusat dan jari-jari adalah :' .$total_seluruh);
        return redirect('/')->with('info_bintang', 'Hasil  O (0,0) adalah :' . $hasil)->with('info_bintang2', 'Hasil menentukan titik pusat dan jari-jari adalah :' . $total_seluruh);

    }
}
