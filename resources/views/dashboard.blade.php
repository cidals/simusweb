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
        <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Usaha</th>
                <th>Alamat</th>
                <th>No NIB</th>
                <th>No KBLI</th>
                <th>Nama KBLI</th>
                <th>Tingkat Risiko</th>
                <th>User</th>
                <th>Jumlah</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td colspan="8" style="text-align:left"> Rendah</td>
                <td>1</td>
              </tr>
              <tr>
                <td colspan="8" style="text-align:left"> Menengah Rendah</td>
                <td>1</td>
              </tr>
              <tr>
                <td colspan="8" style="text-align:left"> Menengah Tinggi</td>
                <td>1</td>
              </tr>
              <td colspan="8" style="text-align:left">Tinggi</td>
                <td>1</td>
              </tr>
              <tr>
                <td colspan ="9" style="text-align:center">No. Data</td>
              </tr>
            </tbody>
    </div>
@endsection