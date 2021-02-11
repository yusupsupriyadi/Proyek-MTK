<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YusupController extends Controller
{
    public function index()
    {
        return view('backend.yusup.index');
    }

    public function Proses(Request $request)
    {
        $x1 = $request->input('x1');
        $y1 = $request->input('y1');
        $x2 = $request->input('x2');
        $y2 = $request->input('y2');
        $r2 = $request->input('r2');
        // gasir singgung memalui titik p(x1,y1)
        $hasil_1 = " $x1 y + $y1 x - $r2 = 0 ";

        // mecari garis singgung melalui X-a Y-b
        $hasil_x2= -$x2 * -$x2;
        $hasil_y2= -$y2 * -$y2;

        $hasil_x12= $x1 -$x2;
        $hasil_y12= $y1 -$y2;

        $hasil_xy1= -$x2 * $hasil_x12;
        $hasil_xy2= -$y2 * $hasil_y12;

        $total_xy= $hasil_xy1 + $hasil_xy2;

        $total_xyr= $total_xy - $r2;

        $hasil_2 = "$hasil_x12 X + $hasil_y12 Y + $total_xyr = 0 ";

        // mencari garis p(x1,x2) di luar lingkaran
        $sub_x1= $x1 * $x1;
        $sub_y1= $y1 * $y1;
        $hasil_3= "$sub_x1 + $sub_y1 = $r2";

        
        
        return redirect('/yusup')->with('info','Hasil garis singgung melalui p(x1,y1) pada lingkaran x2 + xy = r2 adalah: ' .$hasil_1)->with('info2', 'Hasil melalui titik P(x1, y1) pada lingkaran (x-a)2 +(y-b)2 = r2  adalah: ' .$hasil_2)->with('info3', 'Hasil melalui titik P(x1, y1) di luar lingkaran adalah: ' .$hasil_3);
    }
    
}
