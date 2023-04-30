<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use Auth;
use Illuminate\Support\Facades\Auth;


class SessionController extends Controller
{
            public function login(Request $request)
                    {
                        // validasi pada input yang diberikan
                        $validatedData = $request->validate([
                            'email' => 'required|email',
                            'password' => 'required',
                        ]);

                        // otentikasi pengguna
                        if (auth()->attempt($validatedData)) {
                            // Otentikasi berhasil
                            $name = Auth::user()->name;
                            return view('pages.index', ['name' => $name]);
                        } else {
                            // Otentikasi gagal
                            return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
                        }
                    }

                    public function authenticated($request, $user)
                    {
                        // Mengambil nama user dari tabel users
                        $name = Auth::user()->name;

                        // Menyimpan nama user ke session
                        $request->session()->put('name', $name);
                    }

                    public function logout(Request $request)
                    {
                        Auth::logout();

                        $request->session()->invalidate();

                        $request->session()->regenerateToken();

                        return redirect('/login');
                    }


}
