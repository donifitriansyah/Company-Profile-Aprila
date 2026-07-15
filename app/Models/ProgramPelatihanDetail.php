<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramPelatihanDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_pelatihan_id',
        'urutan',
        'nama_unit',
        'jumlah_jp',
    ];

    public function programPelatihan()
    {
        return $this->belongsTo(ProgramPelatihan::class);
    }
}
