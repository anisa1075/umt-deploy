<?php

namespace App\Http\Controllers\Admin;

use App\Models\Destinasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DestinasiController extends Controller
{
    public function index(){
        $destinasi = Destinasi::all();
        return view('Admin.Destinasi.destinasi', compact('destinasi'));
    }

    public function formDestinasi(){
        return view('Admin.Destinasi.tambahDestinasi');
    }

    public function tambahDestinasi(Request $request){

        Destinasi::create([
            'img' => $request->file('img')->store('img-destinasi'),
            'foto' => $request->file('foto')->store('img-destinasi'),
            'negara' => $request->negara,
            'desc' => $request->desc,
            'link_artikel' => $request->link_artikel,
            'slug' => Str::slug($request->negara)
        ]);

        return redirect()->route('index.destinasi')->with('Create', "Data Destinasi berhasil ditambahkan");
    }

    public function editDestinasi($id){
        $destinasi = Destinasi::findOrFail($id);

        return view('Admin.Destinasi.editDestinasi', compact('destinasi'));
    }

    public function updateDestinasi(Request $request, $id){

        $destinasi = Destinasi::findOrFail($id);

        // cara pertama atau cara praktis
        if ($request->hasFile('image')) {
            // upload img baru
            $img = $request->file('img');
            $img->storeAs('public/images' . $img->hashName());

            // Hapus foto lama
            Storage::delete('public/images/' . $destinasi->img);

            // update dengan gambar baru
            $destinasi->update([
                'img' => $img->hashName(),
            ]);
        } else {
            // kalau misal nggk up foto, tetap update data yang lain
            $destinasi->negara = $request->negara;
            $destinasi->desc = $request->desc;
            $destinasi->link_artikel = $request->link_artikel;
            $destinasi->img = $request->file('img')->store('img-destinasi');
            $destinasi->foto = $request->file('foto')->store('img-destinasi');

        }

        // menyimpan data perubahan
        $destinasi->update();

        return redirect()->route('index.destinasi')->with('Update', "Data $request->negara Berhasil di Update");
    }

    public function deleteDestinasi($id){
        $destinasi = Destinasi::findOrFail($id);
        $destinasi->delete();

        return redirect()->back()->with('Delete', "Data $destinasi->negara berhasil di hapus");
    }

    public function descDestinasi($id){
        $destinasi = Destinasi::findOrFail($id);

        return view('Admin.Destinasi.descDestinasi', compact('destinasi'));
    }

    public function uploadImage(){
        // code upload
        // $post = new Destinasi();
        // $post->id = 0;
        // $post->exists = true;

        // $images = $post->addMediaFromRequest('upload')->toMediaCollection('images');

        // return response()->json([
        //     'url'=> $images->getUrl()
        // ]);
    }

    public function upload(Request $request)
    {
       if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }
}
