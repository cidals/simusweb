@extends('layouts.main')

@section('title', 'All Data')

@section('content')
<h1>Data {{ Auth::user()->username }} </h1>
<hr class="featurette-divider">
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
            <th>Tanggal</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($datas as $item)
          <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->address }}</td>
          <td>{{ $item->no_nib }}</td>
          <td>{{ $item->kbli_code }}</td>
          <td>{{ $item->date_input }}</td>
          <tr>
            <td colspan ="9" style="text-align:center">No. Data</td>
          </tr>
          @endforeach
        </tbody>
</div>
@endsection