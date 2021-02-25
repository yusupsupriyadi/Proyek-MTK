<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Yusup3Controller extends Controller
{
    public function index()
    {
        return view('yusup3.index');
    }

    public function Proses(Request $request)
    {
        $x1 = $request->input('x1');
        $y1 = $request->input('y1');
        $a = $request->input('a');
        $b = $request->input('b');
        $c = $request->input('c');

        $hasil_a= - $a;
        $hasil_b= - $b;
        $hasil_c= - $c;

        $hasil_xa = $a  / 2;
        $hasil_xb = $b / 2;

        $hasil_ax = $hasil_xa * $x1;
        $hasil_by = $hasil_xb * $y1;

        $hasil_x1x = $x1 + $hasil_xa;
        $hasil_y1y = $y1 + $hasil_xb;

        $hasil_ab = $hasil_ax + $hasil_by + $c;
        if ($hasil_y1y == 0) {
            $total_xx = $hasil_ab / $hasil_x1x;
            $hasil_abr = " x + $total_xx = 0";
        } else if ($hasil_x1x == 0) {
            $total_yy = $hasil_ab / $hasil_y1y;
            $hasil_abr = " y +$total_yy = 0";
        } else {
            $hasil_abr = " $hasil_x1x x + $hasil_y1y y + $hasil_ab = 0 ";
        }

        $ket_1 = "x2 + y2 + $a x + $b + $c dititik ($x1,$y1)";
        $ket_2 = "A= -($a) = $hasil_a, B= -($b) = $hasil_b, C= -($c) = $hasil_c" ;
        

        return redirect('/yusup3')->with('info', 'Hasil:' . $hasil_abr)->with('ket1', '' . $ket_1)->with('ket2', '' . $ket_2);
    }
}
