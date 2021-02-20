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
        $hasil_1 = " $x1 x + $y1 y - $r2 = 0 ";

        // mecari garis singgung melalui X-a Y-b
        $hasil_x2= -$x2;
        $hasil_y2= -$y2;

        $hasil_x1a= $x1 - $x2;
        $hasil_y1b= $y1 - $y2;

        $hasil_xa= $hasil_x2 * $hasil_x1a;
        $hasil_yb= $hasil_y2 * $hasil_y1b;

        $total_xy= $hasil_xa + $hasil_yb;

        $total_xyr= $r2 - $total_xy;

        $hasil_2 = "$hasil_x1a X + $hasil_y1b Y = $total_xyr";

        // Menentukan Garis singgung lingkaran yang melalui titik P(x1, y1) pada lingkaran x2 + y2 + Ax + By + C = 0 
        $hasil_a= $x2  / 2;
        $hasil_b= $y2 / 2; 

        $hasil_ax= $hasil_a * $x1;
        $hasil_by= $hasil_b * $y1;

        $hasil_x1x= $x1 + $hasil_a;
        $hasil_y1y= $y1 + $hasil_b;

        $hasil_ab= $hasil_ax + $hasil_by + $r2;
        if ($hasil_y1y == 0){
            $total_xx= $hasil_ab / $hasil_x1x;
            $hasil_abr= " x + $total_xx = 0";
        } else if($hasil_x1x == 0){
            $total_yy= $hasil_ab / $hasil_y1y;
            $hasil_abr= " y +$total_yy = 0";
        } else {
            $hasil_abr= " $hasil_x1x x + $hasil_y1y y + $hasil_ab = 0 ";
        }

        // menentukan Garis singgung lingkaran dengan gradien m
        $g_r= $r2 / 4 ;
        $g_rr= $g_r * 5;
        $hasil_g = sqrt($g_rr);

        $hasil_4 = "2y = -x + $hasil_g => x + 2y - $hasil_g = 0";
        
        return redirect('/')->with('info','Hasil garis singgung melalui p(x1,y1) pada lingkaran x2+xy=r2 adalah: ' .$hasil_1)->with('info2', 'Hasil melalui titik P(x1, y1) pada lingkaran (x-a)2+(y-b)2=r2  adalah: ' .$hasil_2)->with('info3', 'Hasil Garis singgung lingkaran yang melalui titik P(x1, y1) pada lingkaran x2+y2+Ax+By+C=0 adalah: ' .$hasil_abr)->with('info4', 'Menentukan Garis singgung lingkaran dengan gradien m: ' . $hasil_4);
    }
    
}
