<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $fillable = [
        'nip',
        'datangawal',
        'ontimemasuk',
        'datangtelat',
        'pulangawal',
        'ontimepulang',
        'pulangtelat',
        'sakit',
        'cuti',
    ];
}
