@extends('layouts.main')

@section('title', 'Delete User')

@section('content')
{{-- <h2>Are You Sure to Delete {{ $user->name }} ?</h2>
<div class="mt-5">
    <a href="/user-destroy/{{ $user->slug }}" class="btn btn-danger me-3">Yakin</a>
    <a href="/users" class="btn btn-secondary">Batal</a>
</div> --}}
<div class="row">
    <div class="col-md-6">
        <div class="card mt-5">
            <div class="card-header">
                <div class="mt-3" style="float:left">
                    <h3>Are You Sure to Delete {{ $user->name }} ?</h3> 
                </div>
            </div>

            <div class="card-body">
                <a href="/user-destroy/{{ $user->slug }}" class="btn btn-danger me-3">Yakin</a>
                <a href="/users" class="btn btn-secondary">Batal</a>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection