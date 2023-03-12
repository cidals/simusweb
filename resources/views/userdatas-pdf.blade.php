<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static {
            position: relative;
            border: 2px solid #543535;
        }

        th,
        td {
            padding: 15px;
            font-size: 14px;
            /* border-block-color: blue; */
        }
    </style>
    <title>SimusWeb | Cetak Data RBA {{ Auth::user()->username }} </title>
</head>

<body>
    <div class="form-group">
        <p align="center" style="font-size:24px; text-transform:uppercase"><b>LAPORAN DATA PERIZINAN BERUSAHA OSS-RBA
                SEKTOR
                {{ Auth::user()->username }}</b></p>
        <p align="center" style="font-size:24px"><b>KOTA BANDAR LAMPUNG</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Usaha</th>
                    <th>Alamat</th>
                    <th>No NIB</th>
                    <th>No KBLI</th>
                    <th>Nama KBLI</th>
                    <th>Tingkat Risiko</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->date_input }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->no_nib }}</td>
                        <td>{{ $item->kbli_code }}</td>
                        <td>{{ $item->kbli_name }}</td>
                        <td>{{ $item->risk->name }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="9" style="text-align:center; font-weight:bold"> Jumlah</td>
                <tr>
                    <td colspan="7" style="text-align:left"> Rendah</td>
                    <td>{{ $data_count_r }}</td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align:left"> Menengah Rendah</td>
                    <td>{{ $data_count_mr }}</td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align:left"> Menengah Tinggi</td>
                    <td>{{ $data_count_mt }}</td>
                </tr>
                <td colspan="7" style="text-align:left">Tinggi</td>
                <td>{{ $data_count_t }}</td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align:left; font-weight:bold">Total</td>
                    <td style="text-align:left; font-weight:bold">{{ $total_data }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        window.print()
    </script>
</body>

</html>


















































{{-- @extends('layouts.main')
@section('content')
    <h1 class="d-flex flex-column justify-content-center">Laporan Per Periode {{ Auth::user()->username }}</h1>
    <hr class="featurette-divider">

    <div class="mt-4">
        <h2>Data</h2>
        <div class="row">
            <table class="table table-striped mt-5">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Usaha</th>
                        <th>Alamat</th>
                        <th>No NIB</th>
                        <th>No KBLI</th>
                        <th>Nama KBLI</th>
                        <th>Tingkat Risiko</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->date_input }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->no_nib }}</td>
                            <td>{{ $item->kbli_code }}</td>
                            <td>{{ $item->kbli_name }}</td>
                            <td>{{ $item->risk->name }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="8" style="text-align:left"> Rendah</td>
                        <td>{{ $data_count_r }}</td>
                    </tr>
                    <tr>
                        <td colspan="8" style="text-align:left"> Menengah Rendah</td>
                        <td>{{ $data_count_mr }}</td>
                    </tr>
                    <tr>
                        <td colspan="8" style="text-align:left"> Menengah Tinggi</td>
                        <td>{{ $data_count_mt }}</td>
                    </tr>
                    <td colspan="8" style="text-align:left">Tinggi</td>
                    <td>{{ $data_count_t }}</td>
                    </tr>
                    <tr>
                        <td colspan="9" style="text-align:center">No. Data</td>
                    </tr>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection --}}
