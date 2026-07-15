<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Sertifikat extends Model
{
    use HasFactory;

    protected $fillable = [
        'peserta_id',
        'program_pelatihan_id',
        'nomor_sertifikat',
        'uuid',
        'tanggal_terbit',
        'kota_terbit',
        'file_pdf',
        'status',
    ];

    protected $casts = [
        'tanggal_terbit' => 'date',
    ];

    protected static function booted()
    {
        static::creating(function ($sertifikat) {
            if (empty($sertifikat->uuid)) {
                $sertifikat->uuid = (string) Str::uuid();
            }
        });
    }

    public function peserta()
    {
        return $this->belongsTo(Peserta::class);
    }

    public function programPelatihan()
    {
        return $this->belongsTo(ProgramPelatihan::class);
    }
}
