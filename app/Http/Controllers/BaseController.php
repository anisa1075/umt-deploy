<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Galeri;
use App\Models\OpenCome;
use App\Models\Destinasi;
use App\Models\ReadyPackage;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index(){
        $user = User::count();
        $destinasi = Destinasi::count();
        $galeri = Galeri::count();
        $ready = ReadyPackage::count();
        $open = OpenCome::count();
        return view('template.index', compact('user', 'destinasi', 'galeri', 'ready', 'open'));
    }
}
