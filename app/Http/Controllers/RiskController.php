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
        return view('risk', ['risks' => $risks]);
    }
}
