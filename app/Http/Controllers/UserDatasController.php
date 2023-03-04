<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Data;
use App\Models\Risk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserDatasController extends Controller
{
    public function index()
    {
        $datas = Data::where('user_id', Auth::user()->id)->with(['user', 'risk'])->get();
        $countR = Data::where('user_id', Auth::user()->id)->where('risk_id', 1)->count();
        $countMR = Data::where('user_id', Auth::user()->id)->where('risk_id', 2)->count();
        $countMT = Data::where('user_id', Auth::user()->id)->where('risk_id', 3)->count();
        $countT = Data::where('user_id', Auth::user()->id)->where('risk_id', 4)->count();
        $totalData = $countR + $countMR + $countMT + $countT;
        return view('userdatas', ['datas' => $datas, 'data_count_r' => $countR, 'data_count_mr' =>$countMR, 'data_count_mt' =>$countMT, 'data_count_t' =>$countT, 'total_data' => $totalData]);

    }

    public function filter(Request $request)
    {
        $tglawal = Carbon::parse(request()->tglawal)->toDateTimeString();
        $tglakhir = Carbon::parse(request()->tglakhir)->toDateTimeString();
        $datas = Data::where('user_id', Auth::user()->id)->whereBetween('date_input',[$tglawal,$tglakhir])->get();

        return view('userdatas', ['datas' => $datas]);
    }

}
