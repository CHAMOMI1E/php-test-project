<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {return view('home');}

    public function form()
    {return view('form');}

    public function form_check(Request $request)
    {
        dd($request);
    }
}
