<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';

    protected $fillable = [
        'kategori_id',
        'user_id',
        'judul',
        'slug',
        'thumbnail',
        'ringkasan',
        'isi',
        'views',
        'is_featured',
        'status',
        'published_at',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_featured' => 'boolean',
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriBerita::class, 'kategori_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function galeri()
    {
        return $this->hasMany(GaleriBerita::class, 'berita_id')
                    ->orderBy('urutan');
    }

    public function komentar()
    {
        return $this->hasMany(KomentarBerita::class, 'berita_id')
                    ->where('is_approved', true);
    }
}
