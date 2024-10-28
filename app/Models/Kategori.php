<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $fillable = [
        'id',
        'nama'
    ];

    // relasi antara kategori ke tabel berita dengan field id
    public function berita()
    {
        return $this->hasMany(Berita::class, 'id');
    }
}
