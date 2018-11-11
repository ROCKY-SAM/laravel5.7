@extends('layout')

@section('title')
    New Project
@endsection


@section('content')
    <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">Should be a uniqe one</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <textarea class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection