<?php

namespace App\Http\Controllers\Admin;

use App\Models\OpenSelesai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class OpenSelesaiController extends Controller
{
    public function index(){
        $tripSelesai = OpenSelesai::all();
        return view('Admin.TripSelesai.trip', compact('tripSelesai'));
    }

    public function formTrip(){
        return view('Admin.tripSelesai.tambahTrip');
    }

    public function tambahTrip(Request $request){
        OpenSelesai::create([
            'img' => $request->file('img')->store('img-trip-datang'),
        ]);

        return redirect()->route('index.trip.selesai')->with('Create', "Data Trip Selesai berhasil ditambahkan");
    }

    public function editTrip($id){
        $tripSelesai = OpenSelesai::findOrFail($id);
        return view('Admin.TripSelesai.editTrip', compact('tripSelesai'));
    }

    public function updateTrip(Request $request, $id){

        $tripSelesai = OpenSelesai::findOrFail($id);

        // cara pertama atau cara praktis
        if ($request->hasFile('image')) {
            // upload img baru
            $img = $request->file('img');
            $img->storeAs('public/images' . $img->hashName());

            // Hapus foto lama
            Storage::delete('public/images/' . $tripSelesai->img);

            // update dengan gambar baru
            $tripSelesai->update([
                'img' => $img->hashName(),
            ]);
        } else {
            // kalau misal nggk up foto, tetap update data yang lain
            $tripSelesai->img = $request->file('img')->store('img-trip-datang');

        }

        // menyimpan data perubahan
        $tripSelesai->update();

        return redirect()->route('index.trip.selesai')->with('Update', "Data Trip Selesai Berhasil di Update");
    }

    public function deleteTrip($id){
        $tripSelesai = OpenSelesai::findOrFail($id);
        $tripSelesai->delete();

        return redirect()->back()->with('Delete', "Data Open Trip Selesai berhasil di hapus");
    }
}
