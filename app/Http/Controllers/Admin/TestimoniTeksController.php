<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\TestimoniTeks;
use App\Http\Controllers\Controller;

class TestimoniTeksController extends Controller
{
    public function index(){
        $testimoni = TestimoniTeks::all();
        return view('Admin.TestimoniTeks.testimoni', compact('testimoni'));
    }

    public function formTestimoniTeks(){
        return view('Admin.TestimoniTeks.tambahTestimoni');
    }

    public function tambahTestimoniTeks(Request $request){
        TestimoniTeks::create([
            'nama' => $request->nama,
            'pekerja' => $request->pekerja,
            'desc' => $request->desc,
        ]);

        return redirect()->route('index.testimoni.teks')->with('Create', "Data Testimoni Teks berhasil di tambahkan");
    }

    public function editTestimoniTeks($id){
        $testimoniTeks = TestimoniTeks::findOrFail($id);

        return view('Admin.TestimoniTeks.editTestimoni', compact('testimoniTeks'));
    }

    public function updateTestimoniTeks(Request $request, $id){

        $testimoniTeks = TestimoniTeks::findOrFail($id);
        $testimoniTeks->nama = $request->nama;
        $testimoniTeks->pekerja = $request->pekerja;
        $testimoniTeks->desc = $request->desc;

        $testimoniTeks->update();
        return redirect()->route('index.testimoni.teks')->with('Update', "Data Testimoni $request->nama Berhasil di Update");
    }

    public function deleteTestimoniTeks($id){
        $testimoniTeks = TestimoniTeks::findOrFail($id);

        $testimoniTeks->delete();
        return redirect()->back()->with('Delete', "Data Testimoni $testimoniTeks->nama berhasil di hapus");
    }

    public function descTestimoniTeks($id){
        $testimoniTeks = TestimoniTeks::findOrFail($id);

        return view('Admin.TestimoniTeks.descTestimoni', compact('testimoniTeks'));
    }
}
