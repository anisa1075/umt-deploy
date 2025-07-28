<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;
    protected $table = 'galeris';
    protected $fillable = [
        'img',
        'kategori_galeri',
        'judul',
        'negara',
        'desc'
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriGaleri::class, 'kategori_galeri', 'id');
    }
}
