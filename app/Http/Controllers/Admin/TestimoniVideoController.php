<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\TestimoniVideo;
use App\Http\Controllers\Controller;

class TestimoniVideoController extends Controller
{
    public function index(){
        $testimoniVideo = TestimoniVideo::all();
        return view('Admin.TestimoniVideo.testimoniVideo', compact('testimoniVideo'));
    }

    public function formTestimoni(){
        return view('Admin.TestimoniVideo.tambahTestimoni');
    }

    public function tambahTestimoni(Request $request){
        TestimoniVideo::create([
            'link' => $request->link,
        ]);

        return redirect()->route('index.testimoni.video')->with('Create', "Data Testimoni Video berhasil di tambahkan");
    }

    public function editTestimoni($id){
        $testimoniVideo = TestimoniVideo::findOrFail($id);

        return view('Admin.TestimoniVideo.editTestimoni', compact('testimoniVideo'));
    }

    public function updateTestimoni(Request $request, $id) {
        $testimoniVideo = TestimoniVideo::findOrFail($id);
        $testimoniVideo->link = $request->link;

        $testimoniVideo->update();
        return redirect()->route('index.testimoni.video')->with('Update', "Data Testimoni Video Berhasil di Update");
    }

    public function deleteTestimoniVideo($id) {
        $testimoniVideo = TestimoniVideo::findOrFail($id);

        $testimoniVideo->delete();
        return redirect()->back()->with('Delete', "Data Testimoni Video berhasil di hapus");
    }
}
