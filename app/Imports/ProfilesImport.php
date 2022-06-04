<?php

namespace App\Imports;

use App\Models\Profile;
use Maatwebsite\Excel\Concerns\ToModel;

class ProfilesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Profile([
            'id'=>$row[0],
            'nama_ktp' =>$row[1],
            'nama_absen' => $row[2],
            'no_ktp' => "'".$row[3],
            'alamat_ktp' => $row[4],
            'tgl_lahir' => $row[5],
            'agama' => $row[6],
            'alamat' => $row[7],
            'bagian' => $row[8],
            'referensi' => $row[9],
            'aktiv_mulai' => $row[10],
        ]);
    }
}
