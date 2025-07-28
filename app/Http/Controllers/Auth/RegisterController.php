<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'string', 'max:13', 'unique:users'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    // untuk redirect ke login
    protected function registered(\Illuminate\Http\Request $request, $user)
    {
        // Log out the user immediately after registration
        Auth::logout();

        // Redirect to login page with a success message
        return redirect('/login')->with('success', 'Registration successful. Please log in to continue. Chat Admin UMT for take access code');
    }
    // untuk generated kode akses
    protected function generateKodeAkses()
    {
        do {
            $prefix = 'UMT';
            $randomNumber = str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);
            $kodeAkses = $prefix . $randomNumber;
        } while (User::where('kode_akses', $kodeAkses)->exists()); // Cek duplikasi

        return $kodeAkses;
    }
    protected function create(array $data)
    {
        // Pastikan data img di-handle dengan benar
        $imgPath = null;
        if (isset($data['img'])) {
            $imgPath = $data['img']->store('img-users'); // Menyimpan gambar
        }

        // Membuat user baru dan menyimpan ke database
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'nama_perusahaan' => $data['nama_perusahaan'],
            'alamat_perusahaan' => $data['alamat_perusahaan'],
            'phone' => $data['phone'],
            'img' => $imgPath, // Menyimpan path gambar
            'password' => Hash::make($data['password']),
            'kode_akses' => $this->generateKodeAkses(), // Menggunakan fungsi untuk generate kode akses
        ]);
    }
}
