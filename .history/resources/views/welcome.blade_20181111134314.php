@extends('layout')

@section('title')
    Welcome
@endsection


@section('content')
    <h1>My {{ $foo }} website</h1>
    @foreach ($projects as $project)
    @endforeach
 This is the main page   
@endsection