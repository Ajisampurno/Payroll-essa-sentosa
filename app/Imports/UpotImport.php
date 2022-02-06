<?php

namespace App\Imports;

use App\Models\Upot;
use Maatwebsite\Excel\Concerns\ToModel;

class UpotImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Upot([
            'id'=>$row[0],
            'periode_dr'=>$row[1],
            'periode_sampai'=>$row[2],
            'nama_ktp'=>$row[3],
            'status'=>$row[4],
            'saldo_tab'=>$row[5],
            'jml_hadir'=>$row[6],
            'jepret'=>$row[7],
            'harga_karton'=>$row[8],
            'upah'=>$row[9],
            'pot_jam'=>$row[10],
            'lembur'=>$row[11],
            'tabungan'=>$row[12],
            'asuransi'=>$row[13],
            'antigen'=>$row[14],
            'gembok'=>$row[15],
            'kaos'=>$row[16],
            'kasbon'=>$row[17],
            'bpjskes'=>$row[18],
            'pultok'=>$row[19],
            'abl_tabungan'=>$row[20],
            'total_upah'=>$row[21],
        ]);
    }
}
