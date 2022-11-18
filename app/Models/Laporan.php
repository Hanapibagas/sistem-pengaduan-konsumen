<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pengadu_id',
        'diadukan_id',
        'tentang_diadukan_id',
        'status'
    ];

    public function pengadu()
    {
        return $this->belongsTo(Pengadu::class, 'pengadu_id', 'id');
    }

    public function diadukan()
    {
        return $this->belongsTo(Diadukan::class, 'diadukan_id', 'id');
    }

    public function tentang_diadukan()
    {
        return $this->belongsTo(TentangPengaduan::class, 'tentang_diadukan_id', 'id');
    }
}
