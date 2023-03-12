@extends('layouts.main')

@section('title', Auth::user()->username)

@section('content')
    <h1>Data {{ Auth::user()->username }} </h1>
    <hr class="featurette-divider">

    <div class="mt-4">
        <h2>Cetak Per Periode</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="mt-3" style="float:right">
                    {{-- <a href="/userdata-add" class="btn btn-success mb-4 me-md-2"><i class="bi bi-plus-lg"></i> Tambah</a> --}}
                    {{-- <a href="/userdatas-add" class="btn btn-success mb-4 me-md-2"><i class="bi bi-plus-lg"></i> Tambah</a>
                    <a href="/userdatas" class="btn btn-warning mb-4 me-md-2"><i class="bi bi-arrow-counterclockwise"></i>
                        Back</a> --}}

                </div>
                <div class="mt-3" style="float:left">
                    {{-- <a href="/userdatas-pdf" target="_blank" class="btn btn-info bg-opacity-10 mb-4 me-md-2"><i
                            class="bi bi-printer-fill"></i>
                        Print All</a> --}}

                </div>

            </div>
        </div>

        <div class="w-50">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Awal</label>
                <input type="date" class="form-control" id="tglawal" name="tglawal" placeholder="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Awal</label>
                <input type="date" class="form-control" id="tglakhir" name="tglakhir" placeholder="">
            </div>

            <div class="mt-3">
                <a href=""
                    onclick="this.href = '/userdatas-tanggal/' + document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value"
                    target="_blank" class="btn btn-primary bg-opacity-10 mb-4 me-md-2"><i class="bi bi-printer-fill"></i>
                    Print</a>
                <a href="/userdatas" class="btn btn-warning mb-4 me-md-2"><i class="bi bi-arrow-counterclockwise"></i>
                    Back</a>
            </div>
        </div>
    @endsection
