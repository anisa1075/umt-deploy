<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenCome extends Model
{
    use HasFactory;
    protected $table = 'trip_comes';
    protected $fillable = [
        'img',
        'negara',
        'itinerary',
        'tgl_berangkat',
        'link',
    ];
}
