@extends('layout')

@section('title')
    New Project
@endsection


@section('content')
    <form method="POST" action="/project/save">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">title</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Project Name"  name="title">
          <small id="emailHelp" class="form-text text-muted">Should Be A Unique One</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <textarea class="form-control" id="exampleInputPassword1" placeholder="Project Description"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection