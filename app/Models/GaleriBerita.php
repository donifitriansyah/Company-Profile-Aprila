<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GaleriBerita extends Model
{
    protected $table = 'galeri_berita';

    protected $fillable = [
        'berita_id',
        'gambar',
        'caption',
        'urutan',
    ];

    public function berita()
    {
        return $this->belongsTo(Berita::class, 'berita_id');
    }
}
