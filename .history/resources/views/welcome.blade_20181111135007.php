@extends('layout')

@section('title')
    Welcome
@endsection


@section('content')
    <h1>My {{ $foo }} website</h1>
    <div id="accordion">
    @foreach ($projects as $project)
        <li> {{ $project->title }}</li>
    @endforeach
    </div>
 This is the main page   
@endsection