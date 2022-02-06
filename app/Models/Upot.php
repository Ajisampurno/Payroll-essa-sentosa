<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upot extends Model
{
    use HasFactory;

    protected $fillable = [
                            'id',
                            'periode_dr',
                            'periode_sampai',
                            'nama_ktp',
                            'status',
                            'saldo_tab',
                            'jml_hadir',
                            'jepret',
                            'harga_karton',
                            'upah',
                            'pot_jam',
                            'lebur',
                            'tabumgam',
                            'asuransi',
                            'antigen',
                            'gembok',
                            'kaos',
                            'kasbon',
                            'bpjskes',
                            'pultok',
                            'abl_tabungan',
                            'total_upah'
];
}