<?php

namespace App\Http\Controllers\Admin;

use App\Models\Galeri;
use Illuminate\Http\Request;
use App\Models\KategoriGaleri;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index(){
        $galeri = Galeri::all();
        return view('Admin.Galeri.galeri', compact('galeri'));
    }

    public function formGaleri(){

        $kategoriGaleri = KategoriGaleri::all();
        return view('Admin.Galeri.tambahGaleri', compact('kategoriGaleri'));
    }

    public function tambahGaleri(Request $request){

        Galeri::create([
            'img' => $request->file('img')->store('img-galeri'),
            'kategori_galeri' => $request->kategori_galeri,
            'negara' => $request->negara,
            'judul' => $request->judul,
            'desc' => $request->desc,
        ]);

        return redirect()->route('index.galeri')->with('Create', "Berhasil Tambah Data Galeri");
    }

    public function editGaleri(Request $request, $id){
        $kategoriGaleri = KategoriGaleri::all();
        $galeri = Galeri::findOrFail($id);

        return view('Admin.Galeri.editGaleri', compact('kategoriGaleri', 'galeri'));
    }

    public function updateGaleri(Request $request, $id){
        $galeri = Galeri::findOrFail($id);

        // cara pertama atau cara praktis
        if ($request->hasFile('image')) {
            // upload img baru
            $img = $request->file('img');
            $img->storeAs('public/images' . $img->hashName());

            // Hapus foto lama
            Storage::delete('public/images/' . $galeri->img);

            // update dengan gambar baru
            $galeri->update([
                'img' => $img->hashName(),
            ]);
        } else {
            // kalau misal nggk up foto, tetap update data yang lain
            $galeri->desc = $request->desc;
            $galeri->judul = $request->judul;
            $galeri->negara = $request->negara;
            $galeri->kategori_galeri = $request->kategori_galeri;
            $galeri->img = $request->file('img')->store('img-galeri');

        }

        // menyimpan data perubahan
        $galeri->update();

        return redirect()->route('index.galeri')->with('Update', "Data Galeri Berhasil di Update");
    }

    public function deleteGaleri($id){
        $galeri = Galeri::findOrFail($id);
        $galeri->delete();

        return redirect()->back()->with('Delete', "Berhasil Hapus Foto");
    }

    public function descGaleri($id){
        $galeri = Galeri::findOrFail($id);
        return view('Admin.Galeri.descGaleri', compact('galeri'));
    }
}
