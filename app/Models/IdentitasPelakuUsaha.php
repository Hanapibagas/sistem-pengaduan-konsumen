<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentitasPelakuUsaha extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pelaku_usaha',
        'perusahaan',
        'kode_pos',
        'alamat',
    ];
}
