@extends('layout.layout')

@section('title','home')

@section('content')

    @forelse($trains as $train)

    <h1>{{$train['codice_treno']}}</h1>


    @empty
    <h1>No treni</h1>

    @endforelse

@endsection