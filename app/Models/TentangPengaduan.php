<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangPengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_pengaduan',
        'tanggal',
        'jam',
        'lokasi',
        'bukti_pembelian',
        'bukti_saksi',
        'barang_bukti',
        'bentuk_kerugian',
    ];
}
