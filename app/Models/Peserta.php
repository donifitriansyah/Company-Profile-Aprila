<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'nik',
        'email',
        'no_hp',
        'alamat',
    ];

    public function sertifikats()
    {
        return $this->hasMany(Sertifikat::class);
    }
}
