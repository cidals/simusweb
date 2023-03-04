<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataInController extends Controller
{
    public function index()
    {
        return view('data-in');
    }
}
