<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('Admin.User.user', compact('user'));
    }

    public function formUser()
    {
        return view('Admin.User.tambahUser');
    }

    protected function generateKodeAkses()
    {
        do {
            $prefix = 'UMT';
            $randomNumber = str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);
            $kodeAkses = $prefix . $randomNumber;
        } while (User::where('kode_akses', $kodeAkses)->exists()); // Cek duplikasi

        return $kodeAkses;
    }

    public function tambahUser(Request $request)
    {
        User::create([
            'img' => $request->file('img')->store('img-users', 'public'),
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'nama_perusahaan' => $request->nama_perusahaan,
            'alamat_perusahaan' => $request->alamat_perusahaan,
            'phone' => $request->phone,
            'role' => $request->role,
            'kode_akses' => $this->generateKodeAkses(), // Panggil fungsi generate kode akses
        ]);

        return redirect()->route('index.user')->with('Create', "Berhasil Tambah Data User $request->name");
    }

    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('Admin.User.editUser', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->nama_perusahaan = $request->nama_perusahaan;
        $user->alamat_perusahaan = $request->alamat_perusahaan;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->status = $request->status;

        $user->update();
        return redirect()->route('index.user')->with('Update', "Data Status User $request->name Berhasil di Update");
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('Delete', "Data $user->name berhasil di hapus");
    }
}
