<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KategoriGaleri;
use App\Http\Controllers\Controller;

class KategoriGaleriController extends Controller
{
    public function index(){
        $kategoriGaleri = KategoriGaleri::all();
        return view('Admin.KategoriGaleri.kategori', compact('kategoriGaleri'));
    }

    public function tambahKategori(Request $request){
        KategoriGaleri::create([
            'kategori' => $request->kategori,
            'slug' => Str::slug($request->kategori)
        ]);

        return redirect()->route('index.kategori.galeri')->with('Create', "Berhasil Tambah data kategori $request->kategori");
    }

    public function updateKategoriGaleri(Request $request, $id){

        $kategoriGaleri = KategoriGaleri::findOrFail($id);
        $kategoriGaleri->kategori = $request->kategori;
        $kategoriGaleri->slug = Str::slug($request->kategori);

        $kategoriGaleri->update();
        return redirect()->route('index.kategori.galeri')->with('Update', "Data Testimoni $request->kategori Berhasil di Update");
    }

    public function deleteKategoriGaleri($id){
        $kategoriGaleri = KategoriGaleri::findOrFail($id);

        $kategoriGaleri->delete();
        return redirect()->back()->with('Delete', "Data Kategori Galeri $kategoriGaleri->kategori berhasil dihapus");
    }
}
