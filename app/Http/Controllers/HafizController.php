<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HafizController extends Controller
{
    public function index()
    {
        return view('hafiz.index');
    }
    public function Proses(Request $request)
    {
        $a = $request->input('a');
        $b = $request->input('b');
        $r2= $request->input('r2');

        // menentukan persamaan lingkaran dengan pusat 
        $hasil_r2 = $r2 * $r2;
        $hasil_a= -$a * -$a;
        $hasil_ax= -$a * 2;

        $hasil_b= -$b * -$b;
        $hasil_by= -$b * 2;

        $hasil_ab= $hasil_a + $hasil_b;
        $hasil_abr= $hasil_ab - $hasil_r2;

        $total = " x2 + y2 + $hasil_ax x + $hasil_by y + $hasil_abr = 0";



        return redirect('/hafiz')->with('info_hafiz', 'Hasil:' .$total);

    }
}
