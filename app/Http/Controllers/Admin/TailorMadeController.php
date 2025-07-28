<?php

namespace App\Http\Controllers\Admin;

use App\Models\TailorMade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TailorMadeController extends Controller
{
    public function index(){
        $tailorMade = TailorMade::all();

        return view('Admin.TailorMade.tailor', compact('tailorMade'));
    }

    public function formTailorMade(){
        return view('Admin.TailorMade.tambahTailor');
    }

    public function tambahTailorMade(Request $request){
        TailorMade::create([
            'img' => $request->file('img')->store('img-tailor'),
            'judul' => $request->judul,
            'desc' => $request->desc,
        ]);

        return redirect()->route('index.tailor.made')->with('Create', "Berhasil tambah data Tailor Made");
    }

    public function editTailorMade($id){

        $tailor = TailorMade::findOrFail($id);
        return view('Admin.TailorMade.editTailor', compact('tailor'));
    }

    public function updateTailorMade(Request $request, $id){
        $tailor = TailorMade::findOrFail($id);

        // cara pertama atau cara praktis
        if ($request->hasFile('image')) {
            // upload img baru
            $img = $request->file('img');
            $img->storeAs('public/images' . $img->hashName());

            // Hapus foto lama
            Storage::delete('public/images/' . $tailor->img);

            // update dengan gambar baru
            $tailor->update([
                'img' => $img->hashName(),
            ]);
        } else {
            // kalau misal nggk up foto, tetap update data yang lain
            $tailor->judul = $request->judul;
            $tailor->desc = $request->desc;
            $tailor->img = $request->file('img')->store('img-tailor');

        }

        // menyimpan data perubahan
        $tailor->update();

        return redirect()->route('index.tailor.made')->with('Update', "Data Tailor Made $request->judul Berhasil di Update");
    }

    public function deleteTailorMade($id){
        $tailor = TailorMade::findOrFail($id);
        $tailor->delete();
        return redirect()->back()->with('Delete', "Data Tailor Made  Berhasil di Hapus");
    }

    public function descTailorMade($id){
        $tailor = TailorMade::findOrFail($id);
        return view('Admin.TailorMade.descTailor', compact('tailor'));
    }
}
