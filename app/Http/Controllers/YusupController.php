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
        $r2 = $request->input('r2');

        $hasil = " $x1 y + $y1 x - $r2 = 0 ";
        

        return redirect('/yusup')->with('info','Hasil nya adalah :' .$hasil );
    }
    
}
