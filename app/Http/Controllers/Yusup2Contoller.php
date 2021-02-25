<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Yusup2Contoller extends Controller
{
    public function index()
    {
        return view('yusup2.index');
    }

    public function Proses(Request $request)
    {
        $x1 = $request->input('x1');
        $y1 = $request->input('y1');
        $x2 = $request->input('x2');
        $y2 = $request->input('y2');
        $r2 = $request->input('r2');
    
        $hasil_x1= $x1 - $x2;
        $hasil_x1x= -$x2 * $hasil_x1;
        
        $hasil_y1= $y1 - $y2;
        $hasil_y1y= -$y2 * $hasil_y1;

        $hasil_xy= $hasil_x1x + $hasil_y1y;

        $hasil_r2= $hasil_xy - $r2;

        $ket_1 = " (x - $x2)($x1 - $x2) + (y - $y2)($y1 - $y2) = $r2";
        $ket_2 = " (x - $x2)$hasil_x1 + (y - $y2)$hasil_y1 = $r2";
        $ket_3 = " $x2 x + $hasil_x1x + $y2 y + $hasil_y1y = $r2";
        $hasil_1 = " $x2 x + $y2 y + $hasil_xy - $r2 = 0";
        $hasil_2 = " $x2 x + $y2 y + $hasil_r2 = 0";

        return redirect('/yusup2')->with('info2', 'Hasil: ' . $hasil_2)->with('info', '' . $hasil_1)->with('ket1', '' . $ket_1)->with('ket2', '' . $ket_2)->with('ket3', '' . $ket_3);
    }
}
