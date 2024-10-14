<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = "berita";
    protected $fillable = [
        'id',
        'judul',
        'konten',
        'gambar',
        'category_id',
    ];

    // relasi antara berita ke tabel kategori dengan field category_id
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'category_id');
    }
}
