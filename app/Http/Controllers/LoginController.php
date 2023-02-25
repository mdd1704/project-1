<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;
use App\Models\Siswa;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if($request->session()->has('id_petugas'))
        {
            return redirect()->route('home.index');
        }
        else
        {
            return view('page.login');
        }
    }

    public function process(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $data = Petugas::where('username', $username)
        ->where('password', $password)
        ->first();

        if(isset($data))
        {
            $request->session()->put('id', $data->id_petugas);
            $request->session()->put('level', $data->level);

            return redirect()->route('home.index');
        }
        else
        {
            $siswa = Siswa::where('nisn', $username)
            ->where('nis', $password)
            ->first();

            if(isset($siswa))
            {
                $request->session()->put('id', $siswa->nisn);
                $request->session()->put('level', 'siswa');

                return redirect()->route('home.index');
            }
            else
            {
                return redirect()->route('auth.login');
            }
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();

        return redirect()->route('auth.login');
    }
}
