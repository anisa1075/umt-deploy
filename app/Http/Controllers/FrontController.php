<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Galeri;
use App\Models\OpenCome;
use App\Models\Destinasi;
use App\Models\OpenSelesai;
use App\Models\ReadyPackage;
use Illuminate\Http\Request;
use App\Models\TestimoniTeks;
use App\Models\KategoriGaleri;
use App\Models\TestimoniVideo;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        $destinasi = Destinasi::all();
        $testimoni = TestimoniTeks::all();
        $testimoniVideo = TestimoniVideo::all();
        $kategori = KategoriGaleri::all();
        return view('Front.Page.beranda', compact('destinasi', 'testimoni', 'testimoniVideo', 'kategori'));
    }

    public function destinasi() {
        $kategori = KategoriGaleri::all();
        return view('Front.Page.destinasi', compact('kategori'));
    }

    public function detailDestinasi($id) {
        $kategori = KategoriGaleri::all();
        $negara = Destinasi::all();
        $desc = Destinasi::where('id', $id)->first();
        return view('Front.Page.detailDestinasi', compact('desc', 'negara', 'kategori'));
    }

    public function kategori($slug) {
        $kategori = KategoriGaleri::all();
        $kategoriGaleri = KategoriGaleri::where('slug', $slug)->first();
        $galeri = Galeri::where('kategori_galeri', $kategoriGaleri->id)->get();
        $judul = KategoriGaleri::where('slug', $slug)->firstOrFail();


        return view('Front.Page.gallery', compact('galeri', 'kategori', 'judul'));
    }

    public function hubungiKami() {
        $kategori = KategoriGaleri::all();
        return view('Front.Page.hubungiKami', compact('kategori'));
    }

    public function tailorMade() {
        $kategori = KategoriGaleri::all();
        return view('Front.Page.tailorMade', compact('kategori'));
    }

    public function readyPackage() {
        $kategori = KategoriGaleri::all();
        $ready = ReadyPackage::all();
        return view('Front.Page.readyPackage', compact('ready', 'kategori'));
    }

    public function openTrip() {
        $kategori = KategoriGaleri::all();
        $come = OpenCome::all();
        $selesai = OpenSelesai::all();
        return view('Front.Page.openTrip', compact('come', 'selesai', 'kategori'));
    }

    public function agentPartner() {
        $kategori = KategoriGaleri::all();
        $users = User::where('role', 2)->where('status', 'active')->get();
        return view('Front.Page.agentPartner', compact('kategori', 'users'));
    }

    public function detailTrip($id) {
        $kategori = KategoriGaleri::all();
        $itinerary = OpenCome::where('id', $id)->first();
        return view('Front.Page.detailTrip', compact('kategori', 'itinerary'));
    }

    public function detailReady($id) {
        $kategori = KategoriGaleri::all();
        $itinerary = ReadyPackage::where('id', $id)->first();
        return view('Front.Page.detailReadyPackage', compact('kategori','itinerary'));
    }

    // SEARCH DESTINASI
    public function ajax(Request $request)
    {
        $negara = $request->negara;
        $results = DB::table('destinasis')->where('negara', 'like', '%' . $negara . '%')->get();

        $c = count($results);

        if ($c == 0) {
            // jika datanya kosong
            return '<p class=" lg:pl-11 pl-12 font-Poppins font-semibold m-1 duration-300 rounded-lg p-1"
        style="letter-spacing: 1px;">
            Maaf, negara tidak ditemukan...
        </p>';
        } else {
            // Jika datanya ada
            return view('Front.Page.ajaxpage')->with([
                'data' => $results
            ]);
        }
    }


    // untuk konten default (tidak ada pencarian)
    public function read()
    {
        return '<p class=" lg:pl-14 pl-12 font-Poppins font-semibold m-1 duration-300 rounded-lg p-1 text-base"
        style="letter-spacing: 1px;">
            Cari Berbagai Destinasi...
        </p>';
    }
}
