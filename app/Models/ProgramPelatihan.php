<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramPelatihan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_program',
        'deskripsi',
        'durasi_jp',
        'tanggal_mulai',
        'tanggal_selesai',
        'status',
    ];

    protected $casts = [
        'tanggal_mulai' => 'date',
        'tanggal_selesai' => 'date',
        'status' => 'boolean',
    ];

    public function details()
    {
        return $this->hasMany(ProgramPelatihanDetail::class)
            ->orderBy('urutan');
    }

    public function sertifikats()
    {
        return $this->hasMany(Sertifikat::class);
    }
}
