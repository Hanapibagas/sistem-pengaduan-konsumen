<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentitasKonsumen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'umur',
        'jenis_kelamin',
        'email',
        'telepon',
        'no_identitas',
        'alamat',
    ];
}
