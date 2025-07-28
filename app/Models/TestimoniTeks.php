<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimoniTeks extends Model
{
    use HasFactory;
    protected $table = 'testimoni_teks';

    protected $fillable = [
        'nama',
        'pekerja',
        'desc'
    ];
}
