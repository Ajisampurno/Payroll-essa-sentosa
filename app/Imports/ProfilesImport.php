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
            'nama_ktp'=>$row[1],
            'nama_absen' =>$row[2],
            'nip' => $row[3],
            'pin' => $row[4],
            'no_ktp' => $row[5],
            'ttl' => $row[6],
            'agama' => $row[7],
            'alamat' => $row[8],
            'referensi' => $row[9],
            'aktiv_mulai' => $row[10],
        ]);
    }
}
