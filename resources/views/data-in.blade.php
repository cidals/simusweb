@extends('layouts.main')

@section('title', Auth::user()->username)

@section('content')
    <h1>Data {{ Auth::user()->username }} </h1>
    <hr class="featurette-divider">
    <div>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label mr-3">Nama Usaha</label>
            <input type="text" class="form-control mr-3" name="name" id="name" placeholder="Nama Usaha">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                <textarea type="text" class="form-control" name="address" id="address" placeholder="Alamat"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label mr-3">No NIB</label>
            <input type="number" class="form-control mr-3" name="no_nib" id="no_nib" placeholder="Nomor NIB">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label mr-3">No KBLI</label>
            <input type="number" class="form-control mr-3" name="kbli_code" id="kbli_code" placeholder="Nomor KBLI">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label mr-3">Nama KBLI</label>
            <input type="text" class="form-control mr-3" name="kbli_name" id="kbli_name" placeholder="Nama KBLI">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label mr-3">Tanggal</label>
            <input type="date" class="form-control mr-3" name="date" id="date" placeholder="Tanggal">
            </div>
            <div class="mt-3" style="float:right">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection