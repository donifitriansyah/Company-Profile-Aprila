<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    protected $fillable = [
    'nama',
    'slug',
    'deskripsi_singkat',
    'deskripsi',
    'gambar',
    'harga_mulai',
    'satuan_harga',
    'estimasi_pengerjaan',
    'kategori',
    'whatsapp',
    'unggulan',
    'is_active',
    'urutan',
];
}
