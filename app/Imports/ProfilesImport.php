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
            'pin' => $row[3],
            'no_ktp' => "'".$row[4],
            'alamat_ktp' => $row[5],
            'tgl_lahir' => $row[6],
            'agama' => $row[7],
            'alamat' => $row[8],
            'referensi' => $row[9],
            'aktiv_mulai' => $row[10],
        ]);
    }
}
