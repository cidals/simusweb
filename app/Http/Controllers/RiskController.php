<?php

namespace App\Http\Controllers;

use App\Models\Risk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RiskController extends Controller
{
    public function index()
    {
        $risks = Risk::all();
        return view('risks', ['risks' => $risks]);
    }

    public function show($slug)
    {
        $risk = Risk::where('slug', $slug)->first();

        return view('risk-show', ['risk' => $risk]);
    }
}
