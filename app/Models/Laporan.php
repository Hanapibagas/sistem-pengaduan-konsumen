<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pengadu_id',
        'diadukan_id',
        'kronologis_id',
        'jenis_tuntutan_id',
        'tentang_diadukan_id',
        'status',
        'keterangan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function pengadu()
    {
        return $this->belongsTo(IdentitasKonsumen::class, 'pengadu_id', 'id');
    }

    public function diadukan()
    {
        return $this->belongsTo(IdentitasPelakuUsaha::class, 'diadukan_id', 'id');
    }

    public function tentang_diadukan()
    {
        return $this->belongsTo(TentangPengadu::class, 'tentang_diadukan_id', 'id');
    }

    public function kronologis()
    {
        return $this->belongsTo(Kronologis::class, 'kronologis_id', 'id');
    }

    public function jenis_tuntutan()
    {
        return $this->belongsTo(JenisTutan::class, 'jenis_tuntutan_id', 'id');
    }
}
