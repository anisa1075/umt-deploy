<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // protected function validateLogin(Request $request)
    // {
    //     $message = [
    //         'email.required' => 'Masukan email anda !',
    //         'password.required' => 'Masukan password anda !',
    //         'kode_akses.required' => 'Masukan Kode akses anda melalui notifikasi email !',
    //     ];

    //     // $request->validate([
    //     //     'password' => 'required',
    //     //     'email' => 'required|string|email',
    //     //     'kode_akses' => 'required|string',
    //     // ], $message);

    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //         'kode_akses' => 'required|string',
    //     ]);

    //     // dd($request->all());

    //     // Ambil user berdasarkan email
    // $user = User::where('email', $request->email)->first();

    // if ($user && Hash::check($request->password, $user->password)) {
    //     // Periksa apakah kode_akses cocok
    //     if ($user->kode_akses === $request->kode_akses) {
    //         Auth::login($user); // Login user
    //         return redirect()->intended('dashboard'); // Redirect ke halaman dashboard
    //     } else {
    //         return back()->withErrors(['kode_akses' => 'Kode akses salah.']);
    //     }
    // } else {
    //     return back()->withErrors(['login' => 'Email atau password salah.']);
    // }
    // }
    public function login(Request $request)
    {
        $message = [
            'email.required' => 'Masukan email anda !',
            'password.required' => 'Masukan password anda !',
            'kode_akses.required' => 'Masukan Kode akses anda melalui notifikasi email !',
        ];

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'kode_akses' => 'required|string',
        ], $message);

        // Cari pengguna berdasarkan email
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Periksa apakah kode akses cocok
            if ($user->kode_akses === $request->kode_akses) {
                Auth::login($user); // Login pengguna
                return redirect()->intended('/'); // Redirect ke dashboard
            } else {
                return back()->withErrors(['kode_akses' => 'Kode akses salah.']);
            }
        } else {
            return back()->withErrors(['login' => 'Email atau password salah.']);
        }
    }
}
