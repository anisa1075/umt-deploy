<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReadyPackage extends Model
{
    use HasFactory;
    protected $table = 'ready_packages';
    protected $fillable = [
        'img',
        'negara',
        'itinerary',
        'tgl_berangkat',
        'link'
    ];
}
