@extends('layouts.main')

@section('title', 'Tingkat Risiko')

@section('content')
<h1>@yield('title') </h1>
<hr>
    <div class="my-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($risks as $item)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>
                    <a href="#"><i class="bi bi-eye btn btn-warning"></i></a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection