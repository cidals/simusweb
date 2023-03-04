@extends('layouts.main')

@section('title', Auth::user()->username)

@section('content')
    <h1>Profile {{ Auth::user()->username }}</h1>
@endsection