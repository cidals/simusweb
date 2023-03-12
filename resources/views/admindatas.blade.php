@extends('layouts.main')

@section('title', 'All Data')

@section('content')
    <h1>Data {{ Auth::user()->username }} </h1>
    <hr class="featurette-divider">
    <div class="mt-5">
        <h2>All Data</h2>

        <div>
            <form class=" ms-2 col-md-10-center" action="/admindatas/filter" method="GET">
                @csrf
                <div class="input-group mt-5 ">
                    <input class="form-control me-md-3" id="tglawal" name="tglawal" type="date">
                    <input class="form-control me-md-3" id="tglahir" name="tglakhir" type="date">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-primary me-2">Search</button>
                        <a href="/admindatas" class="btn btn-warning me-2"><i class="bi bi-arrow-counterclockwise"></i>
                            Back</a>
                    </div>
            </form>
        </div>
        <table class="table table-striped mt-5">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama User</th>
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
                        <td>{{ $item->user->slug }}</td>
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
                    <td colspan="9" style="text-align:center; font-weight:bold"> Total Data</td>
                <tr>
                <tr>
                    <td colspan="8" style="text-align:left; font-weight:bold">Total</td>
                    <td style="text-align:left; font-weight:bold">{{ $total_data }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        {{ $datas->links() }}
    </div>
@endsection
