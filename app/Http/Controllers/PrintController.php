<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stuga;
use App\Petuga;
use App\Sivita;
use PDF;
use DB;

class PrintController extends Controller
{
    
    
    public function print(Request $request, $id)
    {
        $petugas = Petuga::all();
        $sivitas = Sivita:: all();
        $stugas = Stuga::find($id);
        $stugas = Stuga::findorfail($id);
        $pdf = PDF::loadView('print', compact('stugas', 'petugas', 'sivitas'));
        //return $pdf->download('print');
        return $pdf->stream();
        return view ('print' , compact('stugas', 'petugas', 'sivitas'));

    }
    
}
