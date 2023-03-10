@extends('layouts.main')

@section('title', 'Users')

@section('content')
<h1>@yield('title') </h1>
<hr>
<div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
    <a href="user-add" class="btn btn-success mb-4 me-md-2"><i class="bi bi-plus-lg"></i> Tambah</a>
    <a href="user-deleted" class="btn btn-info mb-4 me-md-2"><i class="bi bi-trash"></i>Lihat Sampah</a>
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
                @foreach ($users as $item)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->username }}</td>
                <td>    
                    @if (($item->phone))
                        {{ $item->phone }}
                    @else
                        -
                    @endif
                </td>
                <td>
                    @if (($item->phone))
                        {{ $item->address }}
                    @else
                        -
                    @endif
                </td>
                <td>
                    <a href="user-show/{{ $item->slug }}"><i class="bi bi-eye btn btn-warning"></i></a>
                    <a href="user-edit/{{ $item->slug }}"><i class="bi bi-pencil-square btn btn-primary"></i></a>
                    <a href="user-delete/{{ $item->slug }}"><i class="bi bi-trash btn btn-danger"></i></a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection