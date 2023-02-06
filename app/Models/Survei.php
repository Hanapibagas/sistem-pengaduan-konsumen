<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survei extends Model
{
    use HasFactory;

    protected $fillable = [
        'pertanyaan_id',
        'repon_id',
        'jawaban'
    ];

    public function Pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class, 'pertanyaan_id', 'id');
    }

    public function Respon()
    {
        return $this->belongsTo(Respon::class, 'repon_id', 'id');
    }
}
