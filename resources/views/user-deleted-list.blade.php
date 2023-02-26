@extends('layouts.main')

@section('title', 'Deleted User')

@section('content')
<h1>@yield('title') </h1>
<hr>
<div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
    <a href="user-restoreall" class="btn btn-info mb-4 me-md-2"><i class="bi bi-download"></i> Restor All</a>
    <a href="users" class="btn btn-success mb-4 me-md-2"><i class="bi bi-arrow-counterclockwise"></i> Back</a>
</div>
    <div class="mt-5">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>
    <div class="my-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Phone</th>
                    <th width="500px">Alamat</th>
                    <th width="195px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->username }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->address }}</td>
                <td>
                    <a href="user-restore/{{ $item->slug }}"><i class="bi bi-box-arrow-right btn btn-primary"></i></a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection