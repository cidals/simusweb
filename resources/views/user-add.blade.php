@extends('layouts.main')

@section('title', 'Add New User')

@section('content')
<h1>@yield('title') </h1>
<hr>
    <div class="mt-5 w-50">
        @if ($errors->any())
            <div class="alert alert-danger">
                
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                
            </div>
        @endif
    <form action="user-add" method="POST">
        @csrf
        <div>
            <label for="exampleFormControlInput1" class="form-label mr-3">Nama</label>
            <input type="text" class="form-control mr-3" name="name" id="name" placeholder="Nama User">
        </div>
        <div>
            <label for="exampleFormControlInput1" class="form-label">User Name</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
        </div>
        <div>
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div>
        <div>
            <label for="exampleFormControlInput1" class="form-label">Telepon</label>
            <input type="number" class="form-control" name="phone" id="phone" placeholder="Telepon">
        </div>
        <div>
            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
            <textarea type="text" class="form-control" name="address" id="address" placeholder="Alamat"></textarea>
        </div>
        <div class="mt-3" style="float:right">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
    </div>
@endsection