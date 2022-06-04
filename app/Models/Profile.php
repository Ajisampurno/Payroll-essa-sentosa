<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
 
    protected $fillable = ['id','nama_ktp','nama_absen','no_ktp','alamat_ktp','tgl_lahir','agama','alamat','bagian','referensi','aktiv_mulai'];

    public function attendance(){
        return $this->hasMany(Attendance::class,'user_id');
    }
}
