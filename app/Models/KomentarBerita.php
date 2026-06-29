<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KomentarBerita extends Model
{
    protected $table = 'komentar_berita';

    protected $fillable = [
        'berita_id',
        'nama',
        'email',
        'komentar',
        'is_approved',
    ];

    protected $casts = [
        'is_approved' => 'boolean',
    ];

    public function berita()
    {
        return $this->belongsTo(Berita::class, 'berita_id');
    }
}
