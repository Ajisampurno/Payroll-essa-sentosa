<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
 
    protected $fillable = ['nama_ktp','nama_absen','nip','pin','no_ktp','ttl','agama','alamat','referensi','aktiv_mulai'];

}
