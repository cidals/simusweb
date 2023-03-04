<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    public function index()
    {
        if($user = Auth::user()->id){
            $datas = Data::get()->all();
            return view('datas', ['datas' => $datas]);
        }       
    }
}
    