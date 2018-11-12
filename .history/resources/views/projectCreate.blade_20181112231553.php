@extends('layout')

@section('title')
    New Project
@endsection


@section('content')
    <form method="POST" action="/project">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">title</label>
        <input type="text" class="form-control  {{ $errors->has('title') ? 'danger' : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Project Name"  name="title" value="{{ old('title') }}">
          <small id="emailHelp" class="form-text text-muted">Should Be A Unique One</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
        <textarea class="form-control" id="exampleInputPassword1" placeholder="Project Description" name="description">{{ old('description') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@if($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<div class="alert alert-danger" role="alert">
    <strong>Oh snap!</strong> Change a few things up and try submitting again.
  </div>
@endsection