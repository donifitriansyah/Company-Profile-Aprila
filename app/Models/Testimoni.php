<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jabatan',
        'instansi',
        'foto',
        'isi_testimoni',
        'rating',
        'urutan',
        'is_active',
        'tanggal_testimoni',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'tanggal_testimoni' => 'date',
        'rating' => 'integer',
        'urutan' => 'integer',
    ];
}
