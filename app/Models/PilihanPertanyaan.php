<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PilihanPertanyaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pertanyaan_id',
        'opsi'
    ];

    public function Pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class, 'pertanyaan_id', 'id');
    }
}
