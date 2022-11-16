<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diadukan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pemilik',
        'perusahaan',
        'alamat',
        'kode_pos',
        'telepon',
        'faximile',
    ];
}
