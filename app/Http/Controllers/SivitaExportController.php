<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\SivitaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Sivita;
use App\Http\Controllers\Controller;

class SivitaExportController extends Controller
{
    public function export() 
    {
        
       
              
        return Excel::download(new SivitaExport, 'sivitas.xlsx');
    }
}
