<?php

namespace App\Exports;

use App\Models\Upot;
use Maatwebsite\Excel\Concerns\FromCollection;

class UpotExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Upot::all();
    }
}
