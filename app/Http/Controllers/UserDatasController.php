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

class UserDatasController extends Controller
{
    public function index()
    {
        $datas = Data::where('user_id', Auth::user()->id)->with(['user', 'risk'])->paginate(5);
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

        $datas = Data::where('user_id', Auth::user()->id)->whereBetween('date_input',[$tglawal,$tglakhir])->paginate(5);

        $countR = Data::where('user_id', Auth::user()->id)->where('risk_id', 1)->count();
        $countMR = Data::where('user_id', Auth::user()->id)->where('risk_id', 2)->count();
        $countMT = Data::where('user_id', Auth::user()->id)->where('risk_id', 3)->count();
        $countT = Data::where('user_id', Auth::user()->id)->where('risk_id', 4)->count();

        // dd($datas);
        return view('userdatas', ['datas' => $datas, 'data_count_r' => $countR, 'data_count_mr' =>$countMR, 'data_count_mt' =>$countMT, 'data_count_t' =>$countT]);
    }

    public function add()
    {
        $risks = Risk::all();

        return view('userdatas-add', compact('risks'));
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'user_id' => 'required',
            'risk_id' => 'required',
            'date_input' => 'required',
            'name' => 'required',
            'address' => 'required',
            'no_nib' => 'required|max:13',
            'kbli_code' => 'required|max:5',
            'kbli_name' => 'required',

        ]);

        $datas = Data::create(array_merge($request->only('user_id', 'risk_id', 'date_input', 'name', 'address', 'no_nib', 'kbli_code', 'kbli_name')
        ));

        return redirect('userdatas-add')->with('status', 'Data baru sukses ditambahkan');
    }

    public function printpdfall()
    {
        $datas = Data::where('user_id', Auth::user()->id)->with(['user', 'risk'])->get();
        $countR = Data::where('user_id', Auth::user()->id)->where('risk_id', 1)->count();
        $countMR = Data::where('user_id', Auth::user()->id)->where('risk_id', 2)->count();
        $countMT = Data::where('user_id', Auth::user()->id)->where('risk_id', 3)->count();
        $countT = Data::where('user_id', Auth::user()->id)->where('risk_id', 4)->count();
        $totalData = $countR + $countMR + $countMT + $countT;

        return view('userdatas-pdf', ['datas' => $datas, 'data_count_r' => $countR, 'data_count_mr' =>$countMR, 'data_count_mt' =>$countMT, 'data_count_t' =>$countT, 'total_data' => $totalData]);
    }

    public function print()
    {

        return view('userdatas-form');

    }

    public function pertanggal($tglawal, $tglakhir)
    {
        // dd("Tanggal Awal :" .$tglawal, "Tanggal Akhir :" .$tglakhir);
        $datas = Data::where('user_id', Auth::user()->id)->whereBetween('date_input',[$tglawal,$tglakhir])->get();
        $totalData = Data::where('user_id', Auth::user()->id)->whereBetween('date_input',[$tglawal,$tglakhir])->count();
        return view ('userdatas-tanggal', ['datas' => $datas, 'total_data' => $totalData ]);
    }

    public function printname()
    {
        $risks = Risk::all();
        return view('userdatas-nameform', ['risks' => $risks]);
    }

    public function pername(Request $request)
    {
        $datas = Data::where('user_id', Auth::user()->id)->where('risk_id', 'LIKE', '%' .$request->risk_id. '%')->get();
        $totalData = Data::where('user_id', Auth::user()->id)->where('risk_id', 'LIKE', '%' .$request->risk_id. '%')->count();
        return view('userdatas-pername', ['datas' => $datas, 'total_data' => $totalData ]);
    }
}
