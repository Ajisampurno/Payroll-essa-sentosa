<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class In extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nip', 'gambar', 'date', 'time', 'status'];
}
