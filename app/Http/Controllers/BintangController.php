<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BintangController extends Controller
{
    public function index()
    {
        return view('bintang.index');
    }

    public function Proses(Request $request)
    {
        $r2 = $request->input('r2');

        // menentukan persamaan lingkaran dengan pusat O (0,0)
        $hasil = $r2 * $r2;

        // menentukan titik pusat dan jari-jari

        $total_seluruh = " x2 + y2  = $hasil";


        // return redirect('/bintang')->with('info', 'Hasil  O (0,0) adalah :' .$hasil)->with('info2', 'Hasil menentukan titik pusat dan jari-jari adalah :' .$total_seluruh);
        return redirect('/bintang')->with('info_bintang2', 'Hasil: ' .$total_seluruh);

    }
}
