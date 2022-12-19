<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangPengadu extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_produk',
        'merek_dagang',
        'type',
        'jenis_pengaduan',
        'saksi',
        'tanggal',
        'jam',
        'lokasi',
        'bukti_bukti',
        'bukti_pembelian',
        'material',
        'fisik',
        'psikis',
    ];
}
