<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Data;
use App\Models\Risk;
use \PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    public function index()
    {
        $datas = Data::paginate(10);
        $totalData = Data::count();

        return view('admindatas', ['datas' => $datas,'total_data' => $totalData]);
    }

    public function filter(Request $request)
    {


        $tglawal = Carbon::parse(request()->tglawal)->toDateTimeString();
        $tglakhir = Carbon::parse(request()->tglakhir)->toDateTimeString();

        $datas = Data::whereBetween('date_input',[$tglawal,$tglakhir])->paginate(10);
        $totalData = Data::whereBetween('date_input',[$tglawal,$tglakhir])->paginate(10)->count();

        // dd($datas);
        return view('admindatas', ['datas' => $datas, 'total_data' => $totalData]);
    }
}
