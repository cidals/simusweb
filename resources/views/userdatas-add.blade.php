@extends('layouts.main')

@section('title', 'Add Data')

@section('content')
    <h1>@yield('title') </h1>
    <hr>

    <div class="mt-5 w-50">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">

                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach

            </div>
        @endif
        <form action="/userdatas-add" method="POST">
            @csrf
            <div>
                <input type="hidden" class="form-control mr-3" name="user_id" id="user_id" value="{{ Auth::user()->id }}"
                    placeholder="Nama User" readonly>
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                <input type="date" class="form-control" name="date_input" id="date_input" placeholder="Tanggal">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Nama Usaha</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nama Usaha">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                <textarea type="text" class="form-control" name="address" id="address" placeholder="Alamat"></textarea>
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Nomor NIB</label>
                <input type="number" class="form-control" name="no_nib" id="no_nib" placeholder="Nomor NIB">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Nomor KBLI</label>
                <input type="number" class="form-control" name="kbli_code" id="kbli_code" placeholder="Nomor KBLI">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Nama KBLI</label>
                <input type="text" class="form-control" name="kbli_name" id="kbli_name" placeholder="Nama KBLI">
            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Tingkat Risiko</label>
                <select type="text" class="form-control" name="risk_id" id="risk_id" placeholder="Tingkat Risiko">
                    <option value="">Pilih Data</option>
                    @foreach ($risks as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-3" style="float:right">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/userdatas" class="btn btn-warning"><i class="bi bi-arrow-counterclockwise"></i>
                    Back</a>
            </div>
        </form>
    </div>
@endsection
