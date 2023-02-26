<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Risk;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $dataCount = Data::count();
        $riskCount = Risk::count();
        $userCount = User::count();
        return view('dashboard', ['data_count' => $dataCount, 'risk_count' => $riskCount, 'user_count' => $userCount]);
    }
}
