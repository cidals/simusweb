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
        $datas = Data::paginate(5);
        $totalData = Data::count();
        $dataCount = Data::count();
        $riskCount = Risk::count();
        $userCount = User::count();
        return view('dashboard', ['datas' => $datas, 'total_data' => $totalData, 'data_count' => $dataCount, 'risk_count' => $riskCount, 'user_count' => $userCount]);
    }
}
