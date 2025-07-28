<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimoniVideo extends Model
{
    use HasFactory;
    protected $table = 'testimoni_videos';
    protected $fillable = [
        'link',
    ];
}
