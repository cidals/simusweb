@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <h1>Halaman {{ Auth::user()->username }}</h1>
    <hr>
    <div class="row mt-5">
        <div class="col-lg-4">
            <div class="card-data data">
                <div class="row">
                    <div class="col-6"><i class="bi bi-database-fill"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">DATA</div>
                        <div class="card-count">{{ $data_count }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-data risiko">
                <div class="row">
                    <div class="col-6"><i class="bi bi-ladder"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">RISIKO</div>
                        <div class="card-count">{{ $risk_count }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-data user">
                <div class="row">
                    <div class="col-6"><i class="bi bi-people"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">USERS</div>
                        <div class="card-count">{{ $user_count }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h2>#Data</h2>
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
