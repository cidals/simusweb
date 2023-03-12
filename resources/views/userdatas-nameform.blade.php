@extends('layouts.main')

@section('title', Auth::user()->username)

@section('content')
    <h1>Data {{ Auth::user()->username }} </h1>
    <hr class="featurette-divider">

    <div class="mt-4">
        <h2>Cetak Per Tingkat Risiko</h2>
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

        <div>
            <div class="w-50">
                <label for="exampleFormControlInput1" class="form-label">Tingkat Risiko</label>
                <select type="search" class="form-control" name="risk_id" id="risk_id" placeholder="Tingkat Risiko">
                    <option value="">Pilih Data...</option>
                    @foreach ($risks as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-3">
                <a href="" method="GET"
                    onclick="this.href = '/userdatas-pername/' + document.getElementById('risk_id').value" target="_blank"
                    class="btn btn-secondary bg-opacity-10 mb-4 me-md-2"><i class="bi bi-printer-fill"></i>
                    Print</a>
                <a href="/userdatas" class="btn btn-warning mb-4 me-md-2"><i class="bi bi-arrow-counterclockwise"></i>
                    Back</a>
                @csrf
            </div>
        </div>
    @endsection
