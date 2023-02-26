<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('welcome',[
            "title" => "Home",
        ]);
    }

    public function kontak()
    {
        return view('kontak',[
            "title" => "Kontak",
        ]);
    }

    public function about()
    {
        return view('about',[
            "title" => "About",
        ]);
    }
}
