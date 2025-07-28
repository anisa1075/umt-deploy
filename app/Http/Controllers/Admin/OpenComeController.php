<?php

namespace App\Http\Controllers\Admin;

use App\Models\OpenCome;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class OpenComeController extends Controller
{
    public function index()
    {
        $tripDatang = OpenCome::all();
        return view('Admin.TripDatang.trip', compact('tripDatang'));
    }

    public function formTrip()
    {
        return view('Admin.TripDatang.tambahTrip');
    }

    public function tambahTrip(Request $request)
    {

        // OpenCome::create([
        //     'img' => $request->file('img')->store('img-trip-datang'),
        //     'negara' => $request->negara,
        //     'itinerary' => $request->itinerary,
        //     'tgl_berangkat' => $request->tgl_berangkat,
        // ]);

        $data=new OpenCome;

        $link = $request->link;

        $filename = time() . '.' . $link->getClientOriginalExtension();

        $request->link->move('assets', $filename);

        $data->link = $filename;
        $data->negara=$request->negara;
        $data->itinerary=$request->itinerary;
        $data->tgl_berangkat=$request->tgl_berangkat;
        $data->img=$request->file('img')->store('img-trip-datang');

        $data->save();

        return redirect()->route('index.trip.akan.datang')->with('Create', "Data Trip Akan Datang berhasil ditambahkan");
    }

    public function editTrip($id)
    {
        $tripDatang = OpenCome::findOrFail($id);
        return view('Admin.TripDatang.editTrip', compact('tripDatang'));
    }

    public function updateTrip(Request $request, $id)
    {

        $tripDatang = OpenCome::findOrFail($id);

        // cara pertama atau cara praktis
        if ($request->hasFile('image')) {
            // upload img baru
            $img = $request->file('img');
            $img->storeAs('public/images' . $img->hashName());

            // Hapus foto lama
            Storage::delete('public/images/' . $tripDatang->img);

            // update dengan gambar baru
            $tripDatang->update([
                'img' => $img->hashName(),
            ]);
        } else {
            // kalau misal nggk up foto, tetap update data yang lain
            $tripDatang->negara = $request->negara;
            $tripDatang->tgl_berangkat = $request->tgl_berangkat;
            $tripDatang->itinerary = $request->itinerary;
            $tripDatang->img = $request->file('img')->store('img-trip-datang');
        }

        // menyimpan data perubahan
        $tripDatang->update();

        return redirect()->route('index.trip.akan.datang')->with('Update', "Data $request->negara Berhasil di Update");
    }

    public function deleteTrip($id)
    {
        $tripDatang = OpenCome::findOrFail($id);
        $tripDatang->delete();

        return redirect()->back()->with('Delete', "Data $tripDatang->negara berhasil di hapus");
    }

    public function descTrip($id)
    {
        $tripDatang = OpenCome::findOrFail($id);

        return view('Admin.TripDatang.descTrip', compact('tripDatang'));
    }

    public function download(Request $request, $filename){
        return response()->download(public_path('assets/' .$filename));
    }
}
