<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function ceklogin(Request $request)
    {
        //cek kiriman dari user

        if (Auth::guard('pengguna')->attempt(
            [
                'username' => $request->username,
                'password' => $request->password
            ]
        )) {

            return redirect()->route('game.index');
        }

        return redirect('/masuk')->with('status', 'Gagal Login');
    }


    public function logout()
    {
        if (Auth::guard('pengguna')->check()) {
            Auth::guard('pengguna')->logout();
        }

        return redirect('/');
    }
}

