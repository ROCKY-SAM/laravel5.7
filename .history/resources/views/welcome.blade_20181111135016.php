@extends('layout')

@section('title')
    Welcome
@endsection


@section('content')
    <h1>My {{ $foo }} website</h1>
    This is the main page   


    <div id="accordion">
    @foreach ($projects as $project)
         
    @endforeach
    </div>



@endsection