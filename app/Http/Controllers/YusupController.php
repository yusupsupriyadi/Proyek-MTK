<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YusupController extends Controller
{
    public function index()
    {
        return view('yusup.index');
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
        $hasil_2 = " $x1 + $y1 y = $r2 ";



        
        return redirect('/yusup')->with('info','Hasil: ' .$hasil_1)->with('info2','' .$hasil_2);
    }
    
}
