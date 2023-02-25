<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if($request->session()->has('id'))
        {
            return view('page.home');
        }
        else
        {
            return redirect()->route('auth.login');
        }
    }
}
