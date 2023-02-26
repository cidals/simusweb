@extends('layouts.main')

@section('title', 'Detail Risiko')

@section('content')
<h1>@yield('title') </h1>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card mt-5">
            <div class="card-header">
                <div class="mt-3" style="float:right">
                    <a href="/risks" class="btn btn-warning mb-4 me-md-2"><i class="bi bi-arrow-counterclockwise"></i> Back</a>
                </div>
            </div>

            <div class="card-body">
                
                <div class="form-group">
                    <strong>Nama:</strong>
                </div>
                <div>
                    {{ $risk->name }}
                </div>
                <div class="form-group mt-3">
                    <strong>Deskription:</strong>
                </div>
                <div>
                    {{ $risk->description }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection