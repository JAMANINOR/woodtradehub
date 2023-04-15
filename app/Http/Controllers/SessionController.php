<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionController extends Controller
{
    public function login(Request $request)
    {
        // Lakukan validasi pada input yang diberikan
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba lakukan otentikasi pengguna
        if (auth()->attempt($validatedData)) {
            // Otentikasi berhasil
            return redirect()->route('pages.index');
        } else {
            // Otentikasi gagal
            return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
        }
    }
}
