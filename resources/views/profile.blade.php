@extends('layouts.main')

@section('title', Auth::user()->username)

@section('content')
    <h1>Profile {{ Auth::user()->username }}</h1>


    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <img src="/img/icon1.png" class="rounded-circle img-fluid" style="width: 150px;">
                    <h5 class="my-3">{{ $user->name }}</h5>
                    <p class="text-muted mb-1">Sektor {{ $user->username }} </p>
                    <p class="text-muted mb-4">{{ $user->address }}</p>
                    <p class="text-muted mb-4">{{ $user->phone }}</p>



                    <div class="card-body">

                        <div class="mt-3" style="float:right">
                            <a href="/userdatas" class="btn btn-warning me-md-2"><i
                                    class="bi bi-arrow-counterclockwise"></i>
                                Back</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection
