<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenSelesai extends Model
{
    use HasFactory;
    protected $table = 'trip_selesais';
    protected $fillable = [
        'img',
    ];
}
