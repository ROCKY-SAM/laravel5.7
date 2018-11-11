@extends('layout')

@section('title')
    Welcome
@endsection


@section('content')
    <h1>My {{ $foo }} website</h1>
    This is the main page


    <div id="accordion">
    @foreach ($projects as $project)

    <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
          <h5 class="card-title"> {{ $project->title }}</h5>
          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne{{$project->title}}" aria-expanded="true" aria-controls="collapseOne">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
            </button>
          </h5>
        </div>
    
        <div id="collapseOne{{$project->title}}" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            {{ $project->description }}
          </div>
        </div>
      </div>   


    @endforeach
    </div>



@endsection