<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengadu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'umur',
        'jenis_kelamin',
        'alamat',
        'telepon',
        'bukti_diri'
    ];
}
