<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
 
    protected $fillable = ['id','nama_ktp','nama_absen','pin','no_ktp','alamat_ktp','tgl_lahir','agama','alamat','referensi','aktiv_mulai'];

}
