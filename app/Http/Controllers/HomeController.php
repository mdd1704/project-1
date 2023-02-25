<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if($request->session()->has('id'))
        {
            $level = $request->session()->get('level');
            return view('page.home')->with('level', $level);
        }
        else
        {
            return redirect()->route('auth.login');
        }
    }
}
