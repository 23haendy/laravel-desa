<?php

namespace App\Exports;

use App\Sivita;
use Maatwebsite\Excel\Concerns\FromCollection;

class SivitaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Sivita::all();
    }
}
