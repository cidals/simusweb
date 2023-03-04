@extends('layouts.main')

@section('title', Auth::user()->username)

@section('content')
    <h1>Data {{ Auth::user()->username }} </h1>
    <hr class="featurette-divider">
    <div class="row mt-5">
        <div class="col-lg-3">
            <div class="card-data rendah">
                <div class="row">
                    <div class="col-6"><i class="bi bi-database-fill"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">RENDAH</div>
                        <div class="card-count">{{ $data_count_r }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card-data menengahrendah">
                <div class="row">
                    <div class="col-6"><i class="bi bi-database-fill"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">MENENGAH RENDAH</div>
                        <div class="card-count">{{ $data_count_mr }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card-data menengahtinggi">
                <div class="row">
                    <div class="col-6"><i class="bi bi-database-fill"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">MENENGAH TINGGI</div>
                        <div class="card-count">{{ $data_count_mt }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card-data tinggi">
                <div class="row">
                    <div class="col-6"><i class="bi bi-database-fill"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">TINGGI</div>
                        <div class="card-count">{{ $data_count_t }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <h2>Data</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="mt-3" style="float:right">
                    <a href="/userdatas" class="btn btn-warning mb-4 me-md-2"><i class="bi bi-arrow-counterclockwise"></i>
                        Back</a>
                </div>
            </div>
            <div>
                <form class=" ms-2 col-md-10-center" action="/userdatas/filter" method="GET">
                    @csrf
                    <div class="input-group mt-5 ">
                        <input class="form-control me-md-4" name="tglawal" type="date">
                        <input class="form-control me-md-4" name="tglakhir" type="date">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-success me-2">Search</button>
                        </div>
                </form>
            </div>

            <table class="table table-striped mt-5">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>User</th>
                        <th>Nama Usaha</th>
                        <th>Alamat</th>
                        <th>No NIB</th>
                        <th>No KBLI</th>
                        <th>Nama KBLI</th>
                        <th>Tingkat Risiko</th>
                        <th>Tanggal</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->user->name }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->no_nib }}</td>
                            <td>{{ $item->kbli_code }}</td>
                            <td>{{ $item->kbli_name }}</td>
                            <td>{{ $item->risk->name }}</td>
                            <td>{{ $item->date_input }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="8" style="text-align:left; font-weight:700"> Total Data</td>

                        <td>{{ $total_data }}</td>

                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
